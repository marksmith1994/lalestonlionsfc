<?php
    defined('C5_EXECUTE') or die("Access Denied.");

    $json   = Loader::helper('json');
    $th     = Loader::helper('text');
    $nh     = Loader::helper('navigation');
    $ih     = Loader::helper('image');
    
    
    if (isset($_GET['page'])) {
        
        Loader::model('page_list');
        
        $itemsPerPage = 9;
        $jsonData = array();
        
        $pl = new PageList();
        $pl->filterByParentID($_GET['cParentID']);
        $pl->setItemsPerPage($itemsPerPage);
        $pl->filter('cvName', '', '!=');
        $pl->filterByAttribute('exclude_page_list', 0);
        // $pl->filter('cvDatePublic', $_GET['latest_date'], '!=');
        // $pl->filter('cvDatePublic', date('Y-m-d H:i:s'), '<=');
        $pl->sortByPublicDateDescending();

        $pages = $pl->getPage($_GET['page']);
        $description = $pl->getSummary();
        
        if ($description->total == 0) {
            $jsonData['nextPage'] = 'nr';
        } else if ($description->total == $description->currentEnd) {
            $jsonData['nextPage'] = 'eor';
        } else {
            $jsonData['nextPage'] = $description->current + 1;
        }

        $latest = array();

        foreach ($pages as $page) {

            if ($page->getAttribute('news_feature_image')) {
                $feature_image = $ih->getThumbnail($page->getAttribute('news_feature_image'), 500, 300, true);
            } else {
                $feature_image = '';
            }

            if ($page->getAttribute('game_date')) {
                $game_date = $page->getAttribute('game_date');
            } else {
                $game_date = 'TBC';
            }

            $latest[] = array(
                'title'             => $th->entities($page->getCollectionName()),
                'url'               => $nh->getLinkToCollection($page),
                'img'               => $feature_image,
                'date'              => date('jS F Y', strtotime($game_date)),
                'description'       => $page->getCollectionDescription()
            );

        }

        $html = '';

        foreach ($latest as $p) {
            $i++;
            if (($i % 2) == 0){
                $reverse == ''; 
            } else{
                $reverse == 'reverse'; 
            }
            // $bg = ($p['img']) ? $p['img']->src : '/themes/laleston_lions/images/lionslogo.png';
            $bg     = ($p['img']) ? $p['img']->src : 'http://placehold.it/500x300';
            $html .= '<div class="news-block ' . $reverse . '">';
                $html .= ' <div class="news-block__image">';
                    $html .= '<img src="' . $bg . '">';
                $html .= '</div>';
                $html .= ' <div class="news-block__content">';
                    $html .= ' <div class="news-block__content--inner">';
                        $html .= '<h2>' . $p['title'] . '</h2>';
                        $html .= '<h4>' . $p['date'] . '</h4>';
                        $html .= '<p>' . $p['description'] . '</p>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';

        }

        $jsonData['pages'] = $html;
        
        echo $json->encode($jsonData);

    } else {
        $jsonData['nextPage'] = 'eor';

        echo $json->encode($jsonData);
    } 
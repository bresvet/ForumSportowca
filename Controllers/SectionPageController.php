<?php

require_once 'ApplicationController.php';
require_once '/opt/lampp/htdocs/ForumSportowca/Models/Section.php';

class SectionPageController extends ApplicationController
{
    public function displaySections()
    {
        $footballSection = new Section('football.png', 'Football', '2 January 2020');
        $boxSection = new Section('box.png', 'Boxing', '1 May 2011');
        $basketballSection = new Section('basketball.png', 'Basketball', '30 April 2019');
        $baseballSection=new Section('baseball.png', 'Baseball','12 December 2017');
        $tableTennisSection=new Section('tableTennis.png','TableTennis','21 November 2012');

        $sectionArray = [$footballSection, $boxSection, $basketballSection,$baseballSection,$tableTennisSection];
        $this->render('SectionPage', ['sections' => $sectionArray]);
    }
}
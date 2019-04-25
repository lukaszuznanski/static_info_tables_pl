<?php

declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;
/***************************************************************
*  Copyright notice
*
*  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
*  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
*  (c) 2019 Łukasz Uznański <lukasz@uznanski.pl>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
* The Language model
*
* @copyright Copyright belongs to the respective authors
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
*/
class Language extends AbstractEntity
{
    /**
    * Polish name of the language
     *
    * @var string
    */
    protected $namePl = '';

    /**
     * Gets the Polish name of the language
     *
     * @return string
     */
    public function getNamePl() : string
    {
        return $this->namePl;
    }

    /**
    * Sets the Polish name of the language
    *
    * @param string $namePl
    * @return void
    */
    public function setNamePl(string $namePl) : void
    {
        $this->namePl = $namePl;
    }
}

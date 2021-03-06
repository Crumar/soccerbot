<?php

namespace Dende\SoccerBot\Model;

use Dende\SoccerBot\Model\Base\Match as BaseMatch;

/**
 * Skeleton subclass for representing a row from the 'matches' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Match extends BaseMatch
{

    public function __construct()
    {
        $this->setHomeTeamGoals(0);
        $this->setAwayTeamGoals(0);
    }

}

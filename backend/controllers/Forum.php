<?php

namespace Controllers;

use Config\Config;
use Controllers\Base\ControllerBase;

final class Forum extends ControllerBase
{

    public string $currentForum;

    public string $currentCategory;

    public function __construct()
    {
        $this->EnforceRules();
    }

    private function ForumExists(int $id) : array | false
    {
        foreach (Config::Forums as $category => $forums)
        {
            foreach ($forums as $forum)
            {
                if ($forum["id"] == $id)
                {
                    $forum["category"] = $category;

                    return $forum;
                }
            }
        }

        return false;
    }


    private function EnforceRules() : void
    {
        if (!isset($_GET["id"]))
            $this->Exit();

        $forum = $this->ForumExists($_GET["id"]);

        if (!$forum)
            $this->Exit();

        $this->currentForum = $forum["title"];
        $this->currentCategory = $forum["category"];
    }

}
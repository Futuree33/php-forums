<?php
require "./backend/autoload.php";
?>

<!doctype html>
<html lang="en">
<head>
    <?php require "./backend/components/head.php" ?>
</head>
<body>
    <?php require "./backend/components/header.php" ?>

    <div style="margin-top: 20px;" class="padding-wrapper">
        <div class="dark-section">
            <h1>V3rmillion</h1>
        </div>
    </div>

    <div style="margin-top: 20px;" class="padding-wrapper">
        <div class="dark-section" style="display: grid; gap: 15px;">
            <?php foreach (categories as $category): ?>
                <div style="padding: 5px;">
                    <div style="display: flex; align-items: center; justify-content: space-between; background-color: var(--accent); border-radius: 6px 6px 0px 0px; padding: 12px 15px;">
                        <h1 style="font-size: 1rem">
                            <?php echo htmlentities($category); ?>
                        </h1>

                        <button style="background-color: transparent; cursor: pointer; border: none; outline: none; font-size: 1.4rem; color: black;">
                            <i class="fa-solid fa-square-plus"></i>
                        </button>
                    </div>

                    <div style="background-color: #101010; padding: 3px 15px">
                        <div style="display: grid; grid-template-columns: 5fr 1fr 1fr 1fr;">
                            <h5>
                                Forum
                            </h5>
                            <h5 style="text-align: center">
                                Threads
                            </h5>
                            <h5 style="text-align: center">
                                Posts
                            </h5>
                            <h5 style="text-align: center">
                                Last Post
                            </h5>
                        </div>
                    </div>

                    <div style="display: grid; background-color: #202020; border-radius: 0px 0px 6px 6px;">
                        <?php $i = 0; ?>
                        <?php foreach (forums[$category] as $forum): ?>
                            <div style="display: grid; padding: 15px; <?php echo ($i++ < count(forums[$category]) - 1) ?  "border-bottom: 1.5px solid #2a2a2a;" : "" ?> align-items: center; grid-template-columns: 5fr 1fr 1fr 1fr;">
                                <h4 style="display: flex; gap: 20px;" class="flex items-center">
                                    <i style="color: var(--accent); font-size: 2rem;" class="fa-regular fa-circle-dot"></i>
                                    <div>
                                        <div>
                                            <span style="font-size: 1rem"><?php echo htmlentities($forum["title"]) ?></span>
                                        </div>

                                        <?php if (isset($forum["description"])): ?>
                                            <p style="font-size: .8rem; font-weight: normal; color: #a0a0a0;"><?php echo htmlentities($forum["description"]) ?></p>
                                        <?php endif; ?>

                                        <?php if (isset($forum["subforums"])): ?>
                                            <div style="gap: 10px; margin-top: 10px;"  class="flex items-center">
                                                <?php foreach ($forum["subforums"] as $subforum): ?>
                                                    <a href="" class="subforum-hover" style="font-size: .8rem; font-weight: normal; border: 1px solid white; padding: 5px 15px; ">
                                                        <?php echo htmlentities($subforum) ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </h4>
                                <h5 style="text-align: center; font-size: .9rem; font-weight: normal; color: #a0a0a0;">
                                    100
                                </h5>
                                <h5 style="text-align: center; font-size: .9rem; font-weight: normal; color: #a0a0a0;">
                                    0
                                </h5>
                                <div style="display: block; font-size: .9rem;  color: #a0a0a0;">
                                    <p style="width: 150px; text-overflow: ellipsis;  white-space: nowrap; overflow: hidden;">Is there asdasdasdsad anyone selling d</p>
                                    <p style="color: #a0a0a0;">6 hours ago</p>
                                    <span style="color: #a0a0a0;">by <a>Username</a></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div style="padding: 5px;">
                <div style="display: flex; align-items: center; justify-content: space-between; background-color: var(--accent); border-radius: 6px 6px 0px 0px; padding: 12px 15px;">
                    <h1 style="font-size: 1rem">
                        Board Statistics
                    </h1>

                    <button style="background-color: transparent; cursor: pointer; border: none; outline: none; font-size: 1.4rem; color: black;">
                        <i class="fa-solid fa-square-plus"></i>
                    </button>
                </div>

                <div style="background-color: #101010; padding: 3px 15px">
                    <h5>
                        Who's online
                    </h5>
                </div>

                <div style="background-color: #202020;  border-radius: 0px 0px 5px 5px; ">
                    <div style="padding: 15px;">
                        <p style="font-size: .8rem; color: #a0a0a0">
                            279 users active in the past 15 minutes (213 members, and 61 guests).
                        </p>

                        <div class="flex" style="font-size: .8rem; gap: 5px; flex-wrap: wrap;">
                            <a style="color: var(--accent); font-weight: 600;">
                                user
                            </a>
                        </div>
                    </div>

                    <div style="border-top: 1.5px solid #2a2a2a; box-shadow: 1px 1px 1px black; margin-top: 20px"></div>

                    <div style="font-size: .8rem; display: flex; flex-wrap: wrap; padding: 20px;">
                        <div style="text-align: center; flex-grow: 1; ">
                            <p style="color: #a0a0a0;">
                                Newest Member: <span style="font-weight: 600;">Username</span>
                            </p>
                            <p style="color: #a0a0a0;">
                                We have <span style="font-weight: 600; color: #a0a0a0;">0</span> posts in <span style="font-weight: 600; color: #a0a0a0;">0</span> threads.
                            </p>
                        </div>
                        <div style="text-align: center; flex-grow: 1; ">
                            <p style="color: #a0a0a0;">
                                We have <span style="font-weight: 600; color: #a0a0a0;">0</span> members.
                            </p>
                            <p style="color: #a0a0a0;">
                                Most online users ever: <span style="font-weight: 600; color: #a0a0a0;">0</span> on <span style="font-weight: 600; color: #a0a0a0;">0-0-0</span>
                            </p>
                        </div>
                    </div>

                    <div style="font-size: .8rem; gap: 10px; background-color: var(--accent); padding: 10px; border-radius: 0px 0px 5px 5px; display: flex; justify-content: end;">
                        <a>
                            Log Out
                        </a>
                        |
                        <a>
                            Forum Team
                        </a>
                        |
                        <a>
                            Forum Statistics
                        </a>
                    </div>
                </div>
            </div>

            <?php require "./backend/components/footer.php" ?>
        </div>
    </div>

    <div style="padding: 30px;"></div>
</body>
</html>

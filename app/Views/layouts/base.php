<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FrontendFunn - Semantic UI - Sample Admin Dashboard Template</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('public/assets/styles/styles.css') ?>" />
</head>

<body>
    <!-- sidebar -->
    <div class="ui sidebar inverted vertical menu sidebar-menu" id="sidebar">
        <div class="item">
            <div class="header">General</div>
            <div class="menu">
                <a class="item">
                    <div>
                        <i class="icon tachometer alternate"></i>
                        Dashboard
                    </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="header">
                Administration
            </div>
            <div class="menu">
                <a class="item">
                    <div><i class="cogs icon"></i>Settings</div>
                </a>
                <a class="item">
                    <div><i class="users icon"></i>Team</div>
                </a>
            </div>
        </div>

        <a href="#" class="item">
            <div>
                <i class="icon chart line"></i>
                Charts
            </div>
        </a>

        <a class="item">
            <div>
                <i class="icon lightbulb"></i>
                Apps
            </div>
        </a>
        <div class="item">
            <div class="header">Other</div>
            <div class="menu">
                <a href="#" class="item">
                    <div>
                        <i class="icon envelope"></i>
                        Messages
                    </div>
                </a>

                <a href="#" class="item">
                    <div>
                        <i class="icon calendar alternate"></i>
                        Calendar
                    </div>
                </a>
            </div>
        </div>

        <div class="item">
            <form action="#">
                <div class="ui mini action input">
                    <input type="text" placeholder="Search..." />
                    <button class="ui mini icon button">
                        <i class=" search icon"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="ui segment inverted">
            <div class="ui tiny olive inverted progress">
                <div class="bar" style="width: 54%"></div>
                <div class="label">Monthly Bandwidth</div>
            </div>

            <div class="ui tiny teal inverted progress">
                <div class="bar" style="width:78%"></div>
                <div class="label">Disk Usage</div>
            </div>
        </div>
    </div>

    <!-- sidebar -->
    <!-- top nav -->

    <?= $this->include('partials/navbar') ?>

    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">

            <?= $this->renderSection('content') ?>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
    <script src="<?= base_url('public/assets/js/scripts.js') ?>"></script>
</body>

</html>
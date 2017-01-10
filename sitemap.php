<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sitemap</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style>
        * {
            font-family: 'Myriad Pro Condensed', Arial, sans-serif;
        }
        html,
        body {
            max-width: 100%;
            overflow: hidden;
        }
        body {
            background: #20282f;
            text-align: center;
        }
        .block {
            text-align: center;
            margin: 10px 40px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
        }
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        a {
            font-family: 'PT Sans Regular', Arial, sans-serif;
            font-size: 24px;
        }
        .text-capitalize {
            text-transform: capitalize;
        }
        .demo-link {
            color: #acacac;
            text-decoration: none;
            border-bottom: 1px solid #acacac;
            transition: all 0.2s;
            line-height: 1.4;
        }
        .demo-link:hover {
            color: #fff;
            text-decoration: none;
            border-bottom-color: transparent;
        }
        h1 {
            font-size: 36px;
            color: #acacac;
        }
        canvas {
            position: fixed;
            z-index: -1;
            left: 0;
            top: 0;
        }
    </style>
</head>
<body id="js_interact-bg">
    <?php
    function getDirMap($dirName)
    {
        // read page directory
        $dirMap = array();
        if ($handle = opendir('./' . $dirName)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && $file != 'favicon.ico') {
                    $dirMap[] = array(
                        'url' => $dirName . "/" . $file,
                        'name' => (($ext_index = strripos($file, ".php", -1)) === false ? $file
                            : substr_replace($file, "", $ext_index, 4)),
                    );
                }
            }
            closedir($handle);
        }

        return $dirMap;
    }
    ?>
    <p><a href="http://epages.su/" target="_blank"><img src="img/logo.png" alt="logo"></a></p>
    <div class="block">
        <h1>Pages</h1>
        <ul>
            <?php foreach (getDirMap('markup/pages') as $value) { ?>
                <li>
                    <a class="demo-link text-capitalize" href="<?= $value['url']; ?>">
                        <?= $value['name']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="block">
        <h1>PSD templates</h1>
        <ul>
            <?php foreach (getDirMap('img/psd') as $value) { ?>
                <li>
                    <a class="demo-link" href="<?= $value['url']; ?>">
                        <?= $value['name']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <script src="js/lib.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            particlesJS.load('js_interact-bg', 'js/particles.json');
        });
    </script>
</body>
</html>

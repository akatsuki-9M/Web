<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to TDS</title>
    <!-- Add your CSS and JavaScript links here -->
</head>
<body>
    <?php require("header.php"); ?>

    <script type="text/javascript">
        document.getElementById("auhome").className = "active";
    </script>

    <div class="art-contentLayout">
        <div class="art-content">
            <!-- Post 1: Welcome -->
            <div class="art-Post">
                <!-- Post layout -->
                <!-- ... (existing post layout code) ... -->
                <h2 class="art-PostHeaderIcon-wrapper">
                    <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                    <span class="art-PostHeader">Welcome</span>
                </h2>
                <div class="art-PostContent">
                    <p align="justify"><b>The Technical Discussion Forum (TDS)</b> is a discussion forum that gives information about various programming languages, general knowledge-related questions, information related to Asp.net, Vb.net, Php, Os-related questions, etc.</p>

                    <!-- ... (existing content) ... -->

                    <p>
                        <span class="art-button-wrapper">
                            <span class="l"> </span>
                            <span class="r"> </span>
                            <a class="art-button" href="javascript:void(0)">Read more...</a>
                        </span>
                    </p>
                </div>
            </div>

            <!-- Post 2: Who uses our site? -->
            <div class="art-Post">
                <!-- Post layout -->
                <!-- ... (existing post layout code) ... -->
                <h2 class="art-PostHeaderIcon-wrapper">
                    <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                    <span class="art-PostHeader">Who uses our site?</span>
                </h2>
                <div class="art-PostContent">
                    <!-- ... (existing content) ... -->
                    <p>
                        <span class="art-button-wrapper">
                            <span class="l"> </span>
                            <span class="r"> </span>
                            <a class="art-button" href="javascript:void(0)">Join&nbsp;Now!</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="art-sidebar1">
            <!-- Sidebar 1 content -->
            <!-- ... (existing sidebar 1 content) ... -->
        </div>
        <div class="art-sidebar2">
            <!-- Sidebar 2 content -->
            <!-- ... (existing sidebar 2 content) ... -->
        </div>
    </div>
    
    <?php require("footer.php"); ?>
</body>
</html>

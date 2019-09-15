<?php
    $profileIsIrving = false; //create a box and initialy put the value of 'false' in the box
    $profileIsPoe = false;
    $profileIsShakespeare = false;
    
    $currentUrl = $_SERVER['REQUEST_URI']; //create a box and ask the server to put the URI in the box
    

    // use an if statement with "string posseses" a sub-string
    if(strpos($currentUrl, 'irving')){
        //set a variable stating we are on Irvings profile IF AND ONLY IF the URI contains irving
        $profileIsIrving = true;
    }
    else if(strpos($currentUrl, 'poe')){
        $profileIsPoe = true;
    }
    else if(strpos($currentUrl, 'shakespeare')){
        $profileIsShakespeare = true;
    } 

?>
<nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="btn" href="/Authors/index.php" role="button">Favorite Authors</a>
        </li>
        <li class="nav-item">
            <?php 
                if($profileIsIrving == true){ 
                    echo "<a class='btn currentPage' href='/Authors/profiles/irving.php' role='button'>Washington Irving</a>";
                }
                else{
                    echo "<a class='btn' href='/Authors/profiles/irving.php' role='button'>Washington Irving</a>";                    
                }
            ?>
        </li>
        <li class="nav-item">
            <?php
            if($profileIsPoe == true){
                echo "<a class='btn currentPage' href='/Authors/profiles/poe.php' role='button'>Edgar Allan Poe</a>";
            }
            else{
                echo "<a class='btn' href='/Authors/profiles/poe.php' role='button'>Edgar Allan Poe</a>";

            }
                ?>
            </li>
            <li class="nav-item">
            <?php
            if($profileIsShakespeare == true){
                echo "<a class='btn currentPage' href='/Authors/profiles/shakespeare.php' role='button'>William Shakespeare</a>";
            }
            else{
                echo "<a class='btn' href='/Authors/profiles/shakespeare.php' role='button'>William Shakespeare</a>";

            }
                ?>
            </li>    
        </ul>
    </div>
</nav>
       <!-- <ul id="nav">
        <li class="navLinkListItem">
            <a href="../index.html">
                <div class="navDivLink">
                    <span class="navLinkText">
                        Favorite Authors
                    </span>
                </div>
            </a>
        </li>

        <li class="navLinkListItem">
            <a href="profiles/irving.html">
                <div class="navDivLink">
                    <span class="navLinkText">
                        Washington Irving
                    </span>
                </div>
            </a>
        </li>
        <li class="navLinkListItem">
            <a href="profiles/poe.html">
                <div class="navDivLink">
                    <span class="navLinkText">
                        Edgar Allan Poe
                    </span>
                </div>
            </a>
        </li>
        <li class="navLinkListItem">
            <a href="profiles/shakespeare.html">
                <div class="navDivLink">
                    <span class="navLinkText">
                        William Shakespeare
                    </span>
                </div>
            </a>
        </li>
    </ul>
</span>
</div>
    
list of image links
https://www.williamshakespeare.net/images/shakespeare.jpg
https://fedora.digitalcommonwealth.org/fedora/objects/commonwealth-oai:mc87r128v/datastreams/thumbnail300/content
https://mediadc.brightspotcdn.com/dims4/default/a4ff469/2147483647/strip/true/crop/939x939+0+0/resize/939x939!/quality/90/?url=https%3A%2F%2Fmediadc.brightspotcdn.com%2Fad%2F80%2F60108b377c6023f12f30c5733174%2F274d827b45bbe36cf5e3ad654889a512.jpg


-->

<!-- EXERCICE 1

<?php

if (isset($_GET['lastname']) && $_GET['lastname'] !== '') {
    if (isset($_GET['firstname']) && $_GET['firstname'] !== '') {
        echo 'Lastname : ' . $_GET['lastname'];
        echo '<br>Firstname : ' . $_GET['firstname'];
    }
}
?> -->


<!-- EXERCICE 2 -->

<!-- <?php
        if (isset($_GET['lastname']) && $_GET['lastname'] !== '') {
            if (isset($_GET['firstname']) && $_GET['firstname'] !== '') {
                if (isset($_GET['age']) && $_GET['age'] !== '') {
                    echo 'Lastname : ' . $_GET['lastname'];
                    echo '<br>Firstname : ' . $_GET['firstname'];
                    echo '<br>Age : ' . $_GET['age'];
                } else {
                    echo 'Veuillez renseigner l\'age';
                }
            }
        }
        ?> -->

<!-- EXERCICE 3 -->

<!-- <?php
        if (isset($_GET['startDate']) && $_GET['startDate'] !== '') {
            if (isset($_GET['endDate']) && $_GET['endDate'] !== '') {
                echo 'Start Date : ' . $_GET['startDate'];
                echo '<br>End Date : ' . $_GET['endDate'];
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }
        ?> -->

<!-- EXERCICE 4 -->

<!-- <?php
        if (isset($_GET['language']) && $_GET['language'] !== '') {
            if (isset($_GET['server']) && $_GET['server'] !== '') {
                echo 'Language : ' . $_GET['language'];
                echo '<br>Server : ' . $_GET['server'];
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        }
        ?> -->

<!-- EXERCICE 5 -->

<!-- <?php
        if (isset($_GET['week']) && $_GET['week'] !== '') {
            echo 'Week : ' . $_GET['week'];
        } else {
            echo 'Veuillez remplir tous les champs';
        }
        ?> -->

<!-- EXERCICE 6 -->

<!-- <?php
if (isset($_GET['building']) && $_GET['building'] !== '') {
    if (isset($_GET['room']) && $_GET['room'] !== '') {
        echo 'Building : ' . $_GET['building'];
        echo '<br>Room : ' . $_GET['room'];
    } else {
    echo 'Veuillez remplir tous les champs';
    }
}
?> -->
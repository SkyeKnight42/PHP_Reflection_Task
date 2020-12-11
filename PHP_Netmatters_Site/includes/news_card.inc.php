<?php
    // echo "Hello World";
    include_once 'database_connection.inc.php';

    $conn = OpenConnection();
    
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo $row['title'] . "<br><br>";
            // echo $row['description'] . "<br><br>";
            // echo $row['post_date'] . "<br><br>";

            echo '<div class="news_card news_info_' . $row['type'] . '">';
                echo '<div class="card_image_container">';
                    echo '<div class="tab_boundaries">';
                        echo '<div class="tab_text">';
                            echo '<a class="tab_link_' . $row['type'] . ' tab_link" href="www.google.com" target="_blank">' . $row['tab_title'] . '</a>';
                            echo '<div class="tab_pop_out">' . '<p>' . $row['tab_path'] . '</p>' . '</div>'; //
                            echo '<div class="pop_out_arrow"></div>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="card_image">' . '<a href="#" target="_blank"><img src="Images/' . $row['image_URL'] . '" alt="' . $row['image_alt_text'] . '">' . '</a>' . '</div>';
                echo '</div>';
                echo '<div class="card_content">' . 
                    '<a class="news_title" href="#" target="_blank">' . $row['title'] . '</a>' . 
                    '<p class="news_description" id="card_text">' . $row['description'] . '</p>' .
                    '<a class="read_more_button" href="#">Read More</a>';
                    echo '<div class="card_author">';
                        echo '<img class="card_author_logo" src="Images/' . $row['author_image_URL'] . '" alt="' . $row['author_image_alt'] . '">';
                        $dateTime = date("jS F Y", strtotime($row['post_date']));
                        echo '<div class="card_author_content">' . 
                        '<strong class="card_author_name">' . "Posted By " . $row['author_name'] . '</strong>' . 
                        '<p class="card_author_date">' . $dateTime . '</p>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
?>
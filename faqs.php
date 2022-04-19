<?php
            include 'config.php';

            try {
                $stmt = $conn->prepare("select * from faqs");
                $stmt->execute();
                $array = $stmt->fetchAll();
               
                $content .= "<ul class='faq-form' type='none'>";
                for ($i = 0; $i < count($array); $i++) {
                    $j = $i + 1;
                    $content .= "<li id='faqs-text' class='question".$j."'>".$array[$i]['question']."<img id='state1' class='chevron_state' src='images/down.png' width='20' height='20'></li>";
                    $content .= "<ul type='square'>";
                    $content .= "<li id='faq-answers' class='answer".$j."'>".$array[$i]['answer']."</li>";
                    $content .= "</ul>";
                    
                   
                }
                $content .= "</ul>";
            } catch (PDOException $e) {
                echo "Connection failed! " . $e->getMessage();
            }

            ?>
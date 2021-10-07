<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
<h1>Forums</h1>
<link rel="stylesheet" type="text/css" href="css/forum.css">
<table>
<?php        
echo '<tr>';
    echo '<td class="leftpart">';
        echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
    echo '</td>';
    echo '<td class="rightpart">';                
            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
    echo '</td>';
echo '</tr>';?>
</table>
<?php include 'includes/overall/footer.php'; ?>
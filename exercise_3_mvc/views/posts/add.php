<p>Add more author and content in here</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="error">
    <?php 
    echo isset($authorErr) ? $authorErr : '';
    echo "<br/>";
    echo isset($contentErr) ? $contentErr : ''; 
    ?>
    </label>
    <br/>
    
    <label for="author">Author</label>
    <input type="text" name="author">
    <br/><br/>

    <label for="content">Content</label>
    <textarea name="content"></textarea>
    <br/>

    <button type="submit" name="add_submit">Add</button>
</form>
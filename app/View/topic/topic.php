<section>
    <!-- <script>
        document.getElementById("lock").addEventListener("click", function(){
            $db = new Topic->
        })
    </script> -->
    <?php if($topic->author == $_SESSION['loggedUser'] && $topic->locked != 1): ?>
        <form method="post">
            <input type="hidden" name="locked" value="1"></input>
            <input type="submit" name="test" value="Lock topic"></input>
        </form>
    <?php endif;?>
    <!-- <button id="lock">Lock topic</button> -->
    <h1><?= $topic->title ?></h1>
    <p><?= $topic->creationDate ?></p>
    <p><?= $topic->content ?></p>
    <p><?= $topic->author ?></p>
    <p><?= $topic->board ?></p>
    <?php if($topic->locked != 1 && $_SESSION['loggedUser'] != ""):?>
        <!-- ajouter tous les éléments accessibles si le topic n'est pas lock ici -->
        <a href="./index.php?page=newmsg&Topic=<?=$topic->title?>">Post reply</a>
    <?php endif; ?>
</section>

<style>
.content-title {
    display: inline-block;
}
.create-news {
    float: right;
    margin: 10px 0;
    margin-right: 10px;
    width: 150px;
    height: 45px;
    background: #333;
    color: #fff;
}

</style>

<div class="w3-container">
    <h2 class="content-title"><?php echo $title; ?></h2>
    <button class="create-news btn btn-primary" onclick="window.location='<?php echo site_url('News/create'); ?>'">Create News</button>
    <ul class="w3-ul w3-card-4 w3-white">
        <?php foreach ($news as $news_item): ?>
            <li class="w3-padding-16">
                <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
                <span class="w3-xlarge"><?php echo $news_item['title']; ?></span>
                <div class="main">
                        <?php echo $news_item['text']; ?>
                </div>
                <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p><br>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
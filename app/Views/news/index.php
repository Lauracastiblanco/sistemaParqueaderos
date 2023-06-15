<div class="container mt-5">
    <h2><?= esc($title) ?></h2>

    <?php if (! empty($news) && is_array($news)): ?>
        <?php foreach ($news as $news_item): ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h3><?= esc($news_item['title']) ?></h3>
                    <div class="main">
                        <?= esc($news_item['body']) ?>
                    </div>
                    <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-primary">View article</a></p>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <div class="card mt-4">
            <div class="card-body">
                <h3>No News</h3>
                <p>Unable to find any news for you.</p>
            </div>
        </div>
    <?php endif ?>
</div>

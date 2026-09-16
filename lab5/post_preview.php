<div class="posts">
    <div class="user-info">
        <div class="title">
            <div class="user-icon"><img src="<?= $post['author_icon']?>" alt="Аватар"></div>
            <div class="username"><a href="http://localhost:8000/profile.php"><?= $post['author'] ?></a></div>
        </div>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 19.2188H20" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 4.55228C16.3536 4.19866 16.8332 4 17.3333 4C17.581 4 17.8262 4.04877 18.0549 4.14353C18.2837 4.2383 18.4916 4.37719 18.6667 4.55228C18.8418 4.72738 18.9807 4.93525 19.0754 5.16402C19.1702 5.3928 19.219 5.638 19.219 5.88562C19.219 6.13324 19.1702 6.37844 19.0754 6.60721C18.9807 6.83599 18.8418 7.04386 18.6667 7.21895L7.55556 18.3301L4 19.219L4.88889 15.6634L16 4.55228Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>

    </div>
    <div class="image-block">
        <a href="http://localhost:8000/post.php?id=<?= $post['id']?>"><img src="<?= $post['post_img']?>" alt="Изображение" class="post_image"></a>
    </div>
    <div class="reactions">
        <div class="heart"><img src="images/heart.png" alt="Сердце"></div>
        <div class="reactions-amount"><?= $post['reactions']?></div>
    </div>
    <div class="description-box description-text-style">
        <div class="description"><?= $post['content'] ?></div>
        <div class="description" style="color: #808080; margin-top: -1px;">ещё</div>
        <div class="description time"><?= $post['time']?></div>
    </div>
</div>
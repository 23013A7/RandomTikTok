<?php require_once 'Wablon/view_page.php'; $prosmotri = view_page::UpDateView('RandomTikTok'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Гениратор случаеных тик токов</title>
  <!-- Мета теги для дискорда и телеграмма -->
  <meta property="og:title" content="Случаеный тикток"/>
  <meta property="og:description" content="Генирирует случаеный тикток"/>
  <meta property="og:url" content="http://f1165082.xsph.ru/random-tiktok"/>
  <meta property="og:type" content="website"/>
  <!-- Импорт ксс и компанентов -->
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/companenten/smeil/_smeil.css">
  <link rel="stylesheet" href="css/companenten/info/_info_message.css">
  <!-- Скрипты -->
  <script src="js/img.js" defer></script>
</head>
<body>
  <div class="wrapper">
    <?php include 'Wablon/menu.php'; ?>
    <div class="content">
      <div class="sidebar">
         <div class="box">
            <?php if ($prosmotri !== false): ?>
                <p style="margin: 0; display: flex; align-items: center; gap: 8px;">
                <img alt="Иконка просмотров" src="https://frutigeraeroarchive.org/images/icons/windows_vista/vista_messenger.ico" class="smail">
                <span>Просмотров: <?php echo $prosmotri; ?></span>
                </p>
            <?php endif; ?>
          </div>
        <div class="box">
          <h3>Меню</h3>
          <p><a href="#main">Гениратор</a></p>
        </div>
        <?php include 'Wablon/nav.html'; ?>
      </div>

      <div class="main">
        <div class="panel">
            <h2 id="main">Гениратор случаеного тик тока</h2>
            <div style="display: flex;">
                <div style="width: 325px; height: 735px" id="tiktok">
                    <blockquote class="tiktok-embed" data-video-id="7049025156345236738" data-embed-from="embed_page" style="max-width:605px; min-width:325px;">
                        <section>
                            
                        </section> 
                    </blockquote> 
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div>
                <div style="padding: 15px 20px;">
                    <h2>Нажмите на кнопку что бы получать случаеный тик ток</h2>
                    <p class="button" style="cursor: pointer;" onclick="RandomTikTok()">Случаеный</p>
                    
                    <script>
                        async function GetTikTok() {
                            try {
                                const container = document.querySelector('#tiktok');
                                
                                const response = await fetch('http://f1165082.xsph.ru/api/RandomTikTok/RandomTikTik');
                                const data = await response.json(); 
                                
                                let videoId = data.TikTok; 
                        
                                container.innerHTML = '';
                        
                                const blockquote = document.createElement('blockquote');
                                blockquote.className = 'tiktok-embed';
                                blockquote.setAttribute('data-video-id', videoId); // тут вставления айди видео
                                blockquote.setAttribute('data-embed-from', 'embed_page');
                                blockquote.style.maxWidth = '605px';
                                blockquote.style.minWidth = '325px';
                                
                                const section = document.createElement('section');
                                blockquote.appendChild(section);
                                
                                container.appendChild(blockquote);
                        
                                if (window.TiktokEmbedConfig) { // скрипт уже загружен не трогать
                                    const script = document.createElement('script');
                                    script.src = "https://www.tiktok.com/embed.js";
                                    script.async = true;
                                    document.body.appendChild(script);
                                } else { //первичная загрузка скрипта если в первцый ращ
                                    const script = document.createElement('script');
                                    script.src = "https://www.tiktok.com/embed.js";
                                    script.async = true;
                                    container.appendChild(script);
                                }
                        
                            } catch (error) {
                                console.error('ОШИБКА:', error);
                            } 
                        }
                        
                        function RandomTikTok() { //обработка кнопки
                            GetTikTok(); //вызов функции
                        }
                        
                        document.addEventListener('DOMContentLoaded', function() { //запуск случаеного подбора тик тока при загрузки страницы
                            console.log('Загрузка успеока!');
                            RandomTikTok(); // Вызов функции
                        });
                    </script>
                </div>
            </div>
            <p>Текст</p>
        </div>
        
        
        <div class="panel" id="comments">
          <h2>Комментарии</h2>

          <!-- Список уже добавленных -->
          <div class="comment-list">
            <div style="display: none;" class="comment">
                <img class="avatar" src="img/avatar/23013 A7.png" alt="Ава" loading="lazy">
                <div class="comment-body">
                    <div class="comment-meta">
                        <strong>23013 A7</strong> · 9 ноября 2025 г. в 12:48
                    </div>
                    <p>Я обновил подвал сайта теперь там вместо слава Гавриловне мои данные, а ещё я убрал скругления у каментариев так выглядит лучше на мой взгляд и ещё надо у них немного уменить паддинг чтобы могло больше поместится</p>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <?php include 'Wablon/podwal.php'; ?>
  </div>
</body>
</html>
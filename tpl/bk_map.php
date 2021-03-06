<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="./../css/map.css" />
  <title>マップ</title>
</head>

<body>
  <header>
    <div class="logo"></div>
  </header>
  <main>
    <div id="container">
      <div id="map-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          id="svg-japan-deform" x="0px" y="0px" viewBox="0 0 854 797" enable-background="new 0 0 854 797"
          xml:space="preserve" style="position: relative">
          <g id="strokes" style="display: none">
            <path id="outline1" fill="#333333" stroke="#333333" stroke-width="4.5"
              d="M632,371H516v-15.25c0-2.73-2.02-4.75-4.75-4.75h-30.5c-2.73,0-4.75,2.02-4.75,4.75V453H228.75c-2.73,0-4.75,2.02-4.75,4.75v112.5c0,2.73,2.02,4.75,4.75,4.75H392v117.25c0,2.73,2.02,4.75,4.75,4.75h114.5c2.73,0,4.75-2.02,4.75-4.75V659h206.25c2.73,0,4.75-2.02,4.75-4.75V577h27v77.25c0,2.73,2.02,4.75,4.75,4.75h30.5c2.73,0,4.75-2.02,4.75-4.75v-454.5c0-2.73-2.02-4.75-4.75-4.75h-152.5c-2.73,0-4.75,2.02-4.75,4.75V371z M204,457.75c0-2.73-2.02-4.75-4.75-4.75H22.75c-2.73,0-4.75,2.02-4.75,4.75v80.5c0,2.73,2.02,4.75,4.75,4.75H102v149.25c0,2.73,2.02,4.75,4.75,4.75h92.5c2.73,0,4.75-2.02,4.75-4.75V457.75z M632.06,171.06c0.32,2.05,1.83,3.56,3.88,3.88l0.81,0.06h50.5l0.81-0.06c2.05-0.32,3.56-1.83,3.88-3.88l0.06-0.81V155h90.75h50.5c2.73,0,4.75-2.02,4.75-4.75V143V23.75c0-2.73-2.02-4.75-4.75-4.75h-50.5h-146c-2.73,0-4.75,2.02-4.75,4.75v146.5L632.06,171.06z M372,599.75c0-2.73-2.02-4.75-4.75-4.75h-138.5c-2.73,0-4.75,2.02-4.75,4.75v92.5c0,2.73,2.02,4.75,4.75,4.75h138.5c2.73,0,4.75-2.02,4.75-4.75V599.75z M106.75,717c-2.73,0-4.75,2.02-4.75,4.75v50.5c0,2.73,2.02,4.75,4.75,4.75h30.5c2.73,0,4.75-2.02,4.75-4.75v-50.5c0-2.73-2.02-4.75-4.75-4.75H106.75z">
            </path>
          </g>
          <path id="pref-1" data-region="1" data-name="北海道" data-default="#689ECA" fill="#689ECA" stroke="none"
            d="M632.06,171.06c0.32,2.05,1.83,3.56,3.88,3.88l0.81,0.06h50.5l0.81-0.06c2.05-0.32,3.56-1.83,3.88-3.88l0.06-0.81V155h90.75h50.5c2.73,0,4.75-2.02,4.75-4.75V143V23.75c0-2.73-2.02-4.75-4.75-4.75h-50.5h-146c-2.73,0-4.75,2.02-4.75,4.75v146.5L632.06,171.06z"
            class="prefecture-map"></path>
          <path id="pref-2" data-region="2" data-name="青森県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M636.75,195c-2.73,0-4.75,2.02-4.75,4.75V245h162v-45.25c0-2.73-2.02-4.75-4.75-4.75H636.75z"
            class="prefecture-map"></path>
          <path id="pref-3" data-region="2" data-name="岩手県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M714,247l80,0l0,60l-80,0z" class="prefecture-map"></path>
          <path id="pref-4" data-region="2" data-name="宮城県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M714,309l80,0l0,60l-80,0z" class="prefecture-map"></path>
          <path id="pref-5" data-region="2" data-name="秋田県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M632,247l80,0l0,60l-80,0z" class="prefecture-map"></path>
          <path id="pref-6" data-region="2" data-name="山形県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M712,309L712 369 664 369 664 354 632 354 632 309 z" class="prefecture-map"></path>
          <path id="pref-7" data-region="2" data-name="福島県" data-default="#4DA9CE" fill="#4DA9CE" stroke="none"
            d="M665,371L794 371 794 431 664 431 664 371 z" class="prefecture-map"></path>
          <path id="pref-8" data-region="3" data-name="茨城県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M754,433l40,0l0,80l-40,0z" class="prefecture-map"></path>
          <path id="pref-9" data-region="3" data-name="栃木県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M692,433l60,0l0,60l-60,0z" class="prefecture-map"></path>
          <path id="pref-10" data-region="3" data-name="群馬県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M630,433l60,0l0,60l-60,0z" class="prefecture-map"></path>
          <path id="pref-11" data-region="3" data-name="埼玉県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M630,495l122,0l0,50l-122,0z" class="prefecture-map"></path>
          <path id="pref-12" data-region="3" data-name="千葉県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M755,515h-1v139.25c0,2.73,2.02,4.75,4.75,4.75h30.5c2.73,0,4.75-2.02,4.75-4.75V515H755z"
            class="prefecture-map"></path>
          <path id="pref-13" data-region="3" data-name="東京都" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M752,547L752 577 727 577 727 597 662 597 662 547 z" class="prefecture-map"></path>
          <path id="pref-14" data-region="3" data-name="神奈川県" data-default="#9899C9" fill="#9899C9" stroke="none"
            d="M727,599h-85v30h20v30h60.25c2.73,0,4.75-2.02,4.75-4.75V599z" class="prefecture-map"></path>
          <path id="pref-15" data-region="4" data-name="新潟県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M662,356L662 431 582 431 582 371 632 371 632 356 z" class="prefecture-map"></path>
          <path id="pref-16" data-region="4" data-name="富山県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M518,371l62,0l0,60l-62,0z" class="prefecture-map"></path>
          <path id="pref-17" data-region="4" data-name="石川県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M480.75,351c-2.73,0-4.75,2.02-4.75,4.75V431h40v-75.25c0-2.73-2.02-4.75-4.75-4.75H480.75z"
            class="prefecture-map"></path>
          <path id="pref-18" data-region="4" data-name="福井県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M516,433L516 493 436 493 436 453 476 453 476 433 z" class="prefecture-map"></path>
          <path id="pref-19" data-region="4" data-name="山梨県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M598,547l62,0l0,50l-62,0z" class="prefecture-map"></path>
          <path id="pref-20" data-region="4" data-name="長野県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M628,433L628 545 596 545 596 597 560 597 560 433 z" class="prefecture-map"></path>
          <path id="pref-21" data-region="4" data-name="岐阜県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M519,433L558 433 558 597 518 597 518 433 z" class="prefecture-map"></path>
          <path id="pref-22" data-region="4" data-name="静岡県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M640,599L640 631 660 631 660 659 580 659 580 599 z" class="prefecture-map"></path>
          <path id="pref-23" data-region="4" data-name="愛知県" data-default="#9AD47F" fill="#9AD47F" stroke="none"
            d="M518,599l60,0l0,60l-60,0z" class="prefecture-map"></path>
          <path id="pref-24" data-region="5" data-name="三重県" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M477,557h-1v140h35.25c2.73,0,4.75-2.02,4.75-4.75V557H477z" class="prefecture-map"></path>
          <path id="pref-25" data-region="5" data-name="滋賀県" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M476,495l40,0l0,60l-40,0z" class="prefecture-map"></path>
          <path id="pref-26" data-region="5" data-name="京都府" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M434,453L434 495 474 495 474 555 392 555 392 453 z" class="prefecture-map"></path>
          <path id="pref-27" data-region="5" data-name="大阪府" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M392,557l40,0l0,68l-40,0z" class="prefecture-map"></path>
          <path id="pref-28" data-region="5" data-name="兵庫県" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M350,453l40,0l0,122l-40,0z" class="prefecture-map"></path>
          <path id="pref-29" data-region="5" data-name="奈良県" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M434,557l40,0l0,93l-40,0z" class="prefecture-map"></path>
          <path id="pref-30" data-region="5" data-name="和歌山県" data-default="#B3DD53" fill="#B3DD53" stroke="none"
            d="M432,627h-40v65.25c0,2.73,2.02,4.75,4.75,4.75H474v-45h-42V627z" class="prefecture-map"></path>
          <path id="pref-31" data-region="6" data-name="鳥取県" data-default="#ECDD28" fill="#ECDD28" stroke="none"
            d="M308,453l40,0l0,60l-40,0z" class="prefecture-map"></path>
          <path id="pref-32" data-region="6" data-name="島根県" data-default="#ECDD28" fill="#ECDD28" stroke="none"
            d="M266,453l40,0l0,60l-40,0z" class="prefecture-map"></path>
          <path id="pref-33" data-region="6" data-name="岡山県" data-default="#ECDD28" fill="#ECDD28" stroke="none"
            d="M308,515l40,0l0,60l-40,0z" class="prefecture-map"></path>
          <path id="pref-34" data-region="6" data-name="広島県" data-default="#ECDD28" fill="#ECDD28" stroke="none"
            d="M266,515l40,0l0,60l-40,0z" class="prefecture-map"></path>
          <path id="pref-35" data-region="6" data-name="山口県" data-default="#ECDD28" fill="#ECDD28" stroke="none"
            d="M264,453h-35.25c-2.73,0-4.75,2.02-4.75,4.75v112.5c0,2.73,2.02,4.75,4.75,4.75H264V453z"
            class="prefecture-map"></path>
          <path id="pref-36" data-region="7" data-name="徳島県" data-default="#FDB42A" fill="#FDB42A" stroke="none"
            d="M372,647h-73v50h68.25c2.73,0,4.75-2.02,4.75-4.75V647z" class="prefecture-map"></path>
          <path id="pref-37" data-region="7" data-name="香川県" data-default="#FDB42A" fill="#FDB42A" stroke="none"
            d="M299,595v50h73v-45.25c0-2.73-2.02-4.75-4.75-4.75H299z" class="prefecture-map"></path>
          <path id="pref-38" data-region="7" data-name="愛媛県" data-default="#FDB42A" fill="#FDB42A" stroke="none"
            d="M297,595h-68.25c-2.73,0-4.75,2.02-4.75,4.75V645h73V595z" class="prefecture-map"></path>
          <path id="pref-39" data-region="7" data-name="高知県" data-default="#FDB42A" fill="#FDB42A" stroke="none"
            d="M297,647h-73v45.25c0,2.73,2.02,4.75,4.75,4.75H297V647z" class="prefecture-map"></path>
          <path id="pref-40" data-region="8" data-name="福岡県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M102,453v90h60v-50h42v-35.25c0-2.73-2.02-4.75-4.75-4.75H102z" class="prefecture-map"></path>
          <path id="pref-41" data-region="8" data-name="佐賀県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M60,453l40,0l0,90l-40,0z" class="prefecture-map"></path>
          <path id="pref-42" data-region="8" data-name="長崎県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M58,453H22.75c-2.73,0-4.75,2.02-4.75,4.75v80.5c0,2.73,2.02,4.75,4.75,4.75H58V453z"
            class="prefecture-map"></path>
          <path id="pref-43" data-region="8" data-name="熊本県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M102,545l60,0l0,92l-60,0z" class="prefecture-map"></path>
          <path id="pref-44" data-region="8" data-name="大分県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M164,495l40,0l0,70l-40,0z" class="prefecture-map"></path>
          <path id="pref-45" data-region="8" data-name="宮崎県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M164,567l40,0l0,70l-40,0z" class="prefecture-map"></path>
          <path id="pref-46" data-region="8" data-name="鹿児島県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M204,639H102v53.25c0,2.73,2.02,4.75,4.75,4.75h92.5c2.73,0,4.75-2.02,4.75-4.75V639z"
            class="prefecture-map"></path>
          <path id="pref-47" data-region="8" data-name="沖縄県" data-default="#F96F39" fill="#F96F39" stroke="none"
            d="M106.75,717c-2.73,0-4.75,2.02-4.75,4.75v50.5c0,2.73,2.02,4.75,4.75,4.75h30.5c2.73,0,4.75-2.02,4.75-4.75v-50.5c0-2.73-2.02-4.75-4.75-4.75H106.75z"
            class="prefecture-map"></path>
        </svg>
      </div>
    </div>
    <div id="text-container"></div>
  </main>
  <footer>
    <?php require_once './footer.php'; ?>
  </footer>
  <script src="./../js/map_region_insects.js"></script>
  <script src="./../js/map.js"></script>
</body>

</html>
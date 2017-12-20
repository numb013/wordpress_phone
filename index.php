
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<!-- Main -->
        <div id="main">
                <!-- Post -->
                <article class="post">
                    <header class="header_top">
                                <div class="title_top">
                                        <h1><a href="#">法人限定プランなどお得なサービスを用意しています！</a></h1>
                                        <p class="top_text">LOREM IPSUM DOLOR AMET NULLAM CONSEQUAT ETIAM FEUGIAT</p>
                                </div>
                        </header>
                        <a href="#" class="image featured">
                            <iframe src="//www.youtube.com/embed/sLu5AIwuUEg?showinfo=0" height="210" width="100%" allowfullscreen="" frameborder="0"></iframe>
                        </a>
                        <footer>
                                <ul class="actions">
                                  <li><a href="#form_area" class="button top_btn contact_btn">お問い合わせ</a></li>
                                        <li><a href="#simulation" class="button top_btn simulation_btn">料金シュミレーション</a></li>
                                        <li><a href="#step" class="button top_btn step_btn">導入までの流れ</a></li>

                                </ul>
                                <span id="simulation"></span>
                        </footer>
                </article>



                <article class="post simulation_post">
                    <header class="header_top">
                            <div class="title_top simulation_title">
                              <h2>料金シュミレーション</h2>
                                <p class="top_text">Price simulation</p>
                            </div>
                    </header>
                    <div>
                        <p>導入したい法人携帯の台数を入力して実行してください。</p>
                        <div class="row uniform_radio">
                            <div class="12u$(small)">
                                <input type="radio" id="demo-priority-low" name="priority" value="2">
                                <label for="demo-priority-low">乗り換えの方</label>
                        </div>
                        <div class="12u$(small)">
                                <input type="radio" id="demo-priority-normal" name="priority" value="1" checked>
                                <label for="demo-priority-normal">新規契約の方</label>
                        </div>
                        </div>
                        <table class=simulation_table>
                            <tr>
                                <td>
                                    <input type="number" class="simulation" style="text-align: center; height: 50px;width: 100%;font-weight: bold;font-size: 28px;padding-left: 12px;">
                                </tb>
                                <td style='padding: 0 10px;'>
                                    台
                                </td>
                                <td>
                                    <button id="button" class="button top_btn simulation_btn"  style='width: 100%'>実行</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="simulation_result">
					<div class='application'>
                      <p>お申込みにかかる導入費用</p>
                      <p class="simulation_text"></p>
					 </div>
                     <p class="simulation_answer">お得な法人携帯.jpなら<span id="cup"></span>円</p>
                    </div>
                </article>




                <article>
                    <section>
                            <h2>支持される3つのポイント</h2>
                            <div class="box alt">
                                <div class="row uniform">
                                    <article class="mini-burdent mini-post">
                                            <header>
                                                    <h3>法人名義のスマートフォン導入利用状況と配布率推移</h3>
                                            </header>
                                            <!--描画箇所 -->
                                            <canvas id="mycanvas"></canvas>
                                    </article>
                                    <article class="mini-burdent mini-post">
                                            <header>
                                                    <h3>携帯電話・PHS、スマートフォンの従業員配布率推移</h3>
                                            <div style="display: inline-block; margin-top: 10px">
                                                <ul class='graph'>
                                                    <li><span style='color: #e2a9c8; font-size: 15px'>■</span>:携帯電話配布率  </li>
                                                    <li><span style='color: #a5d4f4; font-size: 15px'>■</span>:スマホの配布率</li>
                                                </ul>
                                            </div>
                                            </header>
                                            <canvas id="bar-chart"></canvas>
                                    </article>
                                    <article class="mini-burdent mini-post">
                                            <header>
                                                    <h3>スマートフォンの世帯保有率の推移</h3>
                                            </header>
                                            <canvas id="line-chart"></canvas>
                                    </article>
                                    <span id="step"></span>
                                </div>
                            </div>
                    </section>
                </article>




                <!-- 導入までの流れ -->
                        <article class="post">
                                    <header class="header_top">
                                        <div class="title_top">
                                                <h2>導入までの簡単な流れ</h2>
                                                <p class="top_text">携帯電話のトップコンサルタントが御社のモバイルを最適化します！</p>
                                        </div>
                                    </header>

                                    <article class="mini-introduction mini-post">
                                            <header class='step1'>
                                                    <div class="step_box">
                                                        <ul>
                                                            <li class="step_text">お問い合わせ</li>
                                                            <li class="step_number">01</li>
                                                        <ul>
                                                    <div>
                                            </header>
                                            <span class="image"><img src="<?php bloginfo('template_directory'); ?>/images/pic001.jpg" width="100%" alt=""></span>
                                    </article>
                                    <article class="mini-introduction mini-post">
                                            <header class='step2'>
                                                    <div class="step_box">
                                                        <ul>
                                                            <li class="step_text">代理店よりご連絡</li>
                                                            <li class="step_number">02</li>
                                                        <ul>
                                                    <div>
                                            </header>
                                            <span class="image"><img src="<?php bloginfo('template_directory'); ?>/images/pic002.jpg" width="100%" alt=""></span>
                                    </article>
                                    <article class="mini-introduction mini-post">
                                            <header class='step3'>
                                                    <div class="step_box">
                                                        <ul>
                                                            <li class="step_text">料金などの試算</li>
                                                            <li class="step_number">03</li>
                                                        <ul>
                                                    <div>
                                            </header>
                                            <span class="image"><img src="<?php bloginfo('template_directory'); ?>/images/pic003.jpg" width="100%" alt=""></span>
                                    </article>

                                    <article class="mini-introduction mini-post">
                                            <header class='step4'>
                                                    <div class="step_box">
                                                        <ul>
                                                            <li class="step_text">ご訪問ご提案</li>
                                                            <li class="step_number">04</li>
                                                        <ul>
                                                    <div>
                                            </header>
                                            <span class="image"><img src="<?php bloginfo('template_directory'); ?>/images/pic004.jpg" width="100%" alt=""></span>
                                    </article>


                                <p class="step_word">
                                    導入について様々な問題があり 乗り換えや新規契約をいただく中で 最適な提案も重要ですが、導入まで 滞りなく進めさせていただけます。<br><br> 
                                    さまざまな業種状態の法人様へ 導入に至らない場合でも、多くの経験と情報を元に最善の策をご案内いたします。 <br><br>
                                    プロのモバイルコンサルタントが、お客様のお悩みを解決 させていただきます。 <br>
                                    モバイルコンサルタントは法人専任者となりますので、ご安心ください。<br>
                                </p>
                                <span id='case'></span>
                                <footer>
                                        <ul class="actions">
                                                <li><a href="#form_area" class="button big contact_btn">お問い合わせ</a></li>
                                        </ul>
                                </footer>
                        </article>


                        <!-- 導入事例 -->
                        <article class="post">
                            <header class="header_top" >
                                        <div class="title_top">
                                                <h2>導入事例</h2>
                                                <p class="top_text">Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                                        </div>
                                </header>

                        <section>
                                <ul class="posts">
                                        <li>
                                            <article>
                                                <header class="introduction_header">
                                                    <span class="img left">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/koe01.jpg" width="100%" alt="">
                                                    </span>
                                                    <h2>
                                                        営業会社の場合
                                                    </h2>
                                                        230台のスマホを社内のみで利用。月に126万円の費用だった通信費が月69万円に削減しました。<b style="color: #e03131;">年間684万円のコストカット</b>に成功！！
                                                </header>
                                            </article>
                                        </li>
                                        <li>
                                            <article>
                                                <header class="introduction_header">
                                                    <span class="img left">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/koe02.jpg" width="100%" alt="">
                                                    </span>
                                                    <h2>
                                                        工場の場合
                                                    </h2>
                                                        80台のスマホを使用しており、月に60万円のコストが掛かっておりましたが乗り換えをする事により約32万円、月に削減できました！！ <b style="color: #e03131;">年間336万円のコストカット</b>となりました。
                                                </header>
                                            </article>
                                        </li>
                                        <li>
                                            <article>
                                                <header class="introduction_header">
                                                    <span class="img left">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/koe03.jpg" width="100%" alt="">
                                                    </span>
                                                    <h2>
                                                        アパレルの場合
                                                    </h2>
                                                        20台の携帯を使用していたX社、業務柄パケットの利用も多く月に16万掛かっておりました。切り替えにより多く7万に抑える事に成功！！<b style="color: #e03131;">年間110万円のコスト削減</b>できました。
                                                </header>
                                            </article>
                                        </li>
                                </ul>
                        </section>
                    </article>

                    <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
                        <article class="post" id='form_area'>
                            <header class="header_top">
                                <div class="title_top">
                                    <h2>お問合せ</h2>
                                    <p>
                                        ご入力いただいた情報をもとに、担当者より連絡いたします。
                                        「お問い合わせ内容」「お客様情報」をご入力の上、「確認」ボタンをクリックしてください。
                                        「必須」の項目は、必ず入力してください。
                                    </p>
                                </div>
                            </header>
                            <section>
                                <div id="slider">
                                    <?php
                                        $page = get_page_by_path( '%e3%81%8a%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b' );
                                        if( isset( $page ) ) {
                                            echo apply_filters( 'the_content', $page->post_content );
                                        }
                                    ?>
                                </div>
                            </section>
                        </article>
                    </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>
    //円グラフ
    var data = [
     {
      value: 27.6,
      color:"#F7464A",
      highlight: "#ff7377",
      label: "本格的に導入済み"
     },
     {
      value: 8.0,
      color: "#46BFBD",
      highlight: "#47e4e2",
      label: "テストまたは部分導入利用済み"
     },
     {
      value: 1.2,
      color: "#FDB45C",
      highlight: "#FFC870",
      label: "利用開始に向け準備中"
     },
    {
      value: 10.5,
      color: "#7fbd48",
      highlight: "#86e630",
      label: "検討中"
     },
    {
      value: 22.5,
      color: "#666699",
      highlight: "#8989ec",
      label: "まだ考えてない"
     },
    {
      value: 30.2,
      color: "#999",
      highlight: "#ccc",
      label: "必要なし"
     }

    ];
    //円グラフ
    var myChart = new Chart(document.getElementById("mycanvas").getContext("2d")).Doughnut(data);

    //縦グラフ
  var barChartData = {
    labels : ["2015年","2016年","2017年"],
    datasets : [
      {
        fillColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
        strokeColor : /*"#d685b0"*/"rgba(214,133,176,0.7)",
        highlightFill: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
        highlightStroke: /*"#eebdcb"*/"rgba(238,189,203,0.7)",
        data : [17.2,15.3,14.6]
      },
      {
        fillColor : /*"#7fc2ef"*/"rgba(127,194,239,0.7)",
        strokeColor : /*"#7fc2ef"*/"rgba(127,194,239,0.7)",
        highlightFill : /*"#a5d1f4"*/"rgba(165,209,244,0.7)",
        highlightStroke : /*"#a5d1f4"*/"rgba(165,209,244,0.7)",
        data : [7.9,12.4,15.9]
      }
    ]
  }

    //棒グラフ
  var lineChartData = {
    labels : ["2010年", "2011年", "2012年", "2013年","2014年","2015年"],
    datasets : [
      {
        label: "私",
        fillColor : /*"#f2dae8"*/"rgba(242,218,232,0.6)",
        strokeColor : /*"#dd9cb4"*/"rgba(221,156,180,0.6)",
        pointColor : /*"#dd9cb4"*/"rgba(221,156,180,0.6)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : /*"#dd9cb4"*/"rgba(221,156,180,0.6)",
        data : [9.7, 29.3, 49.5, 62.6, 64.2, 72.0]
      }
    ]

  }

  window.onload = function(){
    //縦グラフ
    var ctx1 = document.getElementById("bar-chart").getContext("2d");
    window.myBar = new Chart(ctx1).Bar(barChartData, {
      responsive : true
    });

    //棒線グラフ
    var ctx = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(ctx).Line(lineChartData, {
      responsive: true,
      // 下記を追加すると線がまっすぐになります
      bezierCurve: false,
      // アニメーション停止
      // animation: false
      scaleOverride: true,
      scaleFontSize: 12,
      scaleStepWidth: 100,
      scaleSteps: 1,
    });
  }


    $('#button').on('click', function() {
        var checked = $('input[name=priority]:checked').val();
        var number = $(".simulation").val();
        if (number && number >= 1) {
            var amont = 3000 * number;
            var amont1 = 2000 * number;
            var amont2 = 9500 * number;
            var amont = amont.toLocaleString();
            var amont1 = amont1.toLocaleString();
            var amont2 = amont2.toLocaleString();

            if (checked == 1) {
              $('.simulation_result').css('display','block');
              $('p.simulation_text').text('事務手数料（3,000円 × ' + number + '台）= ' + amont + '円が');
            } else {
              $('.simulation_result').css('display','block');
              $('p.simulation_text').html('事務手数料（3,000円 × ' + number + '台）= ' + amont + '円<br>乗換手数料（2,000円 × ' + number + '台）= ' + amont1 + '円<br>解約違約金（9,500円 × ' + number + '台）= ' + amont2 + '円');
            }

            $('.simulation_answer').css('margin-top','20px');
            var num = 250;
            var tgt = 0;
            var speed = -10;
            setInterval(function(){
                if(tgt <= num){
                    $('#cup').html(num);
                    $('#bar span').css({'width':num});
                    num--;
                    if (num < 0) {
                        $('.simulation_answer').css('margin-top','-55px');
                    }
                }
            },speed);
        } else {
            alert('台数を入力してください');
        }
    });
</script>


<?php
get_sidebar();
get_footer();

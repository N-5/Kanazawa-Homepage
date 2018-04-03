<?php get_header(); ?>
<!-- end modal-main -->
<?php include_once("nav.php"); ?>
<main id="top" class="content">
  <section id="hero" class="hero">
    <ul class="hero_slider">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/kv_img_01_pc.jpg" class="imgchange" alt="北陸<?php echo $place; ?>の<?php echo $city; ?>でホームページを制作を依頼するなら"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/kv_img_02_pc.jpg" class="imgchange" alt="創業者に嬉しい格安ホームページ制作会社"></li>
    </ul>
    <div class="hero_banner">
      <h2>ホームページ制作に<br class="sp">新しいフツーを。</h2>
      <ul>
        <li><a href="#price">驚きの新プランを見る</a></li>
        <li><a href="#contact">相談してみる</a></li>
      </ul>
    </div>
  </section>
  <!-- end hero -->
  
  <section id="lead">
    <div class="lead_inr">
      <h2>
        <span class="en">SOLUTION</span>
        新規ホームページ制作、<br>サイトリニューアルをお考えなら
      </h2>
      <p>弊社は⾦沢で2015年に創業したばかりのまだ新しいベンチャー企業です。コンサルティングを得意とするWEBアナリストの代表と、<br>ホームページ制作・デザイン・動画制作といったクリエイティブフィールドの第⼀線で活躍してきたWEBクリエイターの３⼈で活動をしております。<br>クリエイティブによる経営改善を第一に考えるホームページ制作会社です。<br></p>
      <p>この創業パックは企画・制作段階での徹底的な効率化によって、<?php echo $place; ?>・<?php echo $city; ?>トップクラスのクオリティを保ちながら、最安値プランでは <span>49,800円</span>という<br><?php echo $city; ?>のホームページ制作会社の中では圧倒的低価格でホームページを制作することが可能になりました。<br>また本気でWEBからの集客を考えられているお客様からは、しっかりとしたSEO対策が可能なゴールドプラン以上も大変好評です。</p>
      <p>弊社の創業パックは、すぐにWEB集客のできるホームページによって北陸をHOTにするベンチャー企業を応援します！</p>
    </div>
  </section>
  <!-- end lead -->
  
  <section id="price">
    <div class="price_inr">
      <h2>
        制作プラン
        <span>問題解決に沿った柔軟なプランをご用意しております。</span>
      </h2>
      <div class="price_sp sp">
        <ul>
          <li>
            <h3>創業プラン</h3>
            <p>49,800<small>円</small></p>
          </li>
          <li>
            <h3>シンプルプラン</h3>
            <p>388,000<small>円</small></p>
          </li>
          <li>
            <h3>ゴールドプラン</h3>
            <p>628,000<small>円</small></p>
          </li>
          <li>
            <h3>ブラックプラン</h3>
            <p>1,180,000<small>円</small></p>
          </li>
        </ul>
        <div class="view_btn"><a href="<?php echo home_url(); ?>/price/" class="arrow">料金プランの詳細はこちら</a></div>
      </div>
      <div class="price_inr_table pc">
        <table>
          <thead>
            <tr>
              <td></td>
              <td>他社サイトA</td>
              <td>創業プラン</td>
              <td>弊社通常プラン</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>初期費用</td>
              <td>49,800円</td>
              <td>49,800円</td>
              <td>380,000円</td>
            </tr>
            <tr>
              <td>制作日数</td>
              <td>90日</td>
              <td>30日</td>
              <td>60日</td>
            </tr>
            <tr>
              <td>ページ数</td>
              <td>5P</td>
              <td>１P+α</td>
              <td>5P+α</td>
            </tr>
            <tr>
              <td>追加ページ数</td>
              <td>5Pまで</td>
              <td>無制限</td>
              <td>無制限</td>
            </tr>
            <tr>
              <td>デザイン</td>
              <td>⾃分で構築</td>
              <td>プロがデザイン</td>
              <td>プロがデザイン</td>
            </tr>
            <tr>
              <td>写真素材</td>
              <td>⾃分で構築</td>
              <td>数百万点から<br class="sp">ご用意</td>
              <td>数百万点の中<br class="sp">からご⽤意</td>
            </tr>
            <tr>
              <td>SEO対策</td>
              <td>×</td>
              <td>◎</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>WordPress</td>
              <td>×</td>
              <td>◯</td>
              <td>◯</td>
            </tr>
            <tr>
              <td>アクセス解析</td>
              <td>×</td>
              <td>◎</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>Search Console</td>
              <td>×</td>
              <td>◯</td>
              <td>◯</td>
            </tr>
            <tr>
              <td>ドメイン</td>
              <td>別途</td>
              <td>初期費用に含む</td>
              <td>初期費用に含む</td>
            </tr>
            <tr>
              <td>サーバー</td>
              <td>×</td>
              <td>◯</td>
              <td>◯</td>
            </tr>
            <tr>
              <td>メールアドレス</td>
              <td>10個まで</td>
              <td>無制限</td>
              <td>無制限</td>
            </tr>
          </tbody>
        </table>
        <div class="view_btn"><a href="<?php echo home_url(); ?>/price/" class="arrow">料金プランの詳細はこちら</a></div>
      </div>
    </div>
  </section>
  <!-- end price -->
  
  <section id="concept">
    <div class="concept_inr">
      <h2><span class="en">Our Specialization</span>高クオリティな<br class="sp">サイトをお作りいたします</h2>
      <ul class="col3">
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img1.png"></figure><p>WordPressによる<br>トップクラスの<span>SEO対策</span></p></li>
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img2.png"></figure><p><span>レスポンシブ</span><br>WEBデザイン(スマホ対応)</p></li>
        <li><figure><img src="<?php echo get_template_directory_uri(); ?>/images/concept_li_img3.png"></figure><p>高いクオリティと<br>依頼しやすい<span>低価格</span></p></li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
  </section>
  <!-- end concept -->
  
  <section id="contents">
    <div class="contents_inr">
      <h2>
        <span class="en">OPTION</span>
        選べるオプションはさまざま。<br class="sp">
        お客様に合ったプランをご用意<br class="sp">
        <span>創業プランであれば最⼤６つお選びいただくことが可能です。</span>
      </h2>
      <ul class="col2">
        <li>
          <figure>01</figure>
          <div><h4>メインビジュアル</h4><p>インパクトを与えてエンドユーザーの直帰率を下げるメインビジュアル。</p></div>
        </li>
        <li>
          <figure>02</figure>
          <div><h4>コンセプト</h4><p>商品（サービス）の持つ特⻑やブランドストーリーを端的に伝えるコンセプト。</p></div>
        </li>
        <li>
          <figure>03</figure>
          <div><h4>こんなお悩みありませんか？</h4><p>エンドユーザーの興味や希望、願望といった意識を刺激するための問題提起。</p></div>
        </li>
        <li>
          <figure>04</figure>
          <div><h4>商品（サービス）の強み</h4><p>商品やサービスのメリット・ベネフィットといった打ち出したい強みをPRします。</p></div>
        </li>
        <li>
          <figure>05</figure>
          <div><h4>制作事例</h4><p>エンドユーザーに安⼼感を与えられ、ホームページの信頼性にも直結する過去実績。</p></div>
        </li>
        <li>
          <figure>06</figure>
          <div><h4>お客様の声</h4><p>信頼感と⼈気感の裏付けとなる、実際に商品が購⼊されて評価を得ているという客観的事実。</p></div>
        </li>
        <li>
          <figure>07</figure>
          <div><h4>他者との比較スペック</h4><p>数字として⽬に⾒える価格やスペック内容を他社と⽐較して御社の強みを打ち出します。</p></div>
        </li>
        <li>
          <figure>08</figure>
          <div><h4>スタッフ紹介</h4><p>御社の雰囲気やイメージを、スタッフ紹介を通すことでより具体的･多⾯的に伝えます。</p></div>
        </li>
        <li>
          <figure>09</figure>
          <div><h4>サービスの流れ</h4><p>商品やサービス導⼊に関する⼼配や不安を払拭するためのフローをピックアップ。</p></div>
        </li>
        <li>
          <figure>10</figure>
          <div><h4>お問い合わせフォーム</h4><p>ホームページ上でのエンドユーザーとの窓⼝となり、御社事業の効率化にも役⽴つコンタクトフォーム。</p></div>
        </li>
        <li>
          <figure>11</figure>
          <div><h4>よくある質問</h4><p>エンドユーザーの疑問を解決して離脱を防ぎ、また商品やサービスに専⾨性を加えます。</p></div>
        </li>
        <li>
          <figure>12</figure>
          <div><h4>ブログ</h4><p>エンドユーザーに有益な情報（コンテンツ）を発信し続けることはSEO的にも重要です。</p></div>
        </li>
      </ul>
    </div>
  </section>
  <!-- end contents -->
  
  <section id="seo">
    <div class="seo_inr">
      <h2>
        <span class="en">SPPORT</span>
        どこよりも徹底的に。<br>あなたのホームページを<br class="sp">サポートします。
      </h2>
      <div class="lead">
        <i><img src="<?php echo get_template_directory_uri(); ?>/images/seo_icon.png" alt=""></i>
          <div><h3><?php echo $city; ?>ホームページ制作.COMのSEO対策サービスは内部対策中心で、<br>他者の外部リンクに頼ったSEO対策は行いません。</h3>
          <p>Googleの検索アルゴリズムの変動にもアンテナを張り巡らせ細かな変化にも対応し、順位変動をコントロールいたします。<br>
          費用はかけられないお客様にもご利用いただくためにSEO対策に対するディレクションのみでのお仕事や、SEOコンテンツの修正を丸投げといった<br>
          ご要望に柔軟なサービスをご提供しております。<br>
          <span>※ また検索結果が上位に表示されなければ、費用は一切いただきませんのでご安心ください。</span></p>
      </div>
    </div>
    <div class="lead">
      <i><img src="<?php echo get_template_directory_uri(); ?>/images/seo2_icon.png" alt=""></i>
      <div>
        <h3>ホームページ集客におけるSEO対策とは？</h3>
        <p>SEO対策とは「Search Engine Optimization」の略で「検索エンジン最適化」といったホームページ集客におけるマーケティング手法のことです。<br> 一般的にはGoogleやYahoo!等で検索するユーザーをターゲットとして、ホームページを検索結果で多く露出させホームページへのアクセスを増やすマーケティング手法を意味します。<br>当社のSEO対策は検索結果の上位表示のみといった部分的な支援にとどまらず、ホームページからの成果を最大化させ達成することを目的としております。</p>
      </div>
    </div>
    <div class="lead">
      <i><img src="<?php echo get_template_directory_uri(); ?>/images/seo3_icon.png" alt=""></i>
      <div>
        <h3><?php echo $city; ?>だけでなく<?php echo $place; ?>県全域のSEO対策を承ります。</h3>
        <p>弊社の事業拠点である<?php echo $city; ?>市はもちろん、<?php echo $place; ?>県全域・富山県全域・福井県全域といった北陸におけるホームページの最適化を全力で支援いたします。これまでのデザインベースのホームページ制作だけでは結果に繋がりにくく、コンテンツSEOとデザインを両立したホームページ集客支援を弊社では心がけております。SEO対策やホームページ制作といったWEB全般のお悩みはお気軽にご相談ください！</p>
      </div>
    </div>
    <div class="method">
      <ul>
        <li><h5>戦略的SEO</h5><p>SEOはお客様のターゲットをしっかりと把握して、WEB市場の調査、キーワード調査を行いビッグキーワードをはじめとしたミドルキーワードといった成果の上がりやすいものから施策展開を行い競合他社に勝るSEO戦略を立案いたします。<?php echo $city; ?>ホームページ制作.COMでは、内部・外部SEOにおける自社チェック項目を活用しておりますので「もれなく・だぶりなく」SEO対策を行い健全なホワイトハットを心がけておりますのでご安心ください。</p></li>
        <li><h5>最適化</h5><p>SEOとはホームページをユーザーの求める優れたコンテンツに最適化することがとても重要になります。検索エンジンは昔に比べてコンテンツを重視する傾向があります。そのためこれまでのSEO業者のようなスパムのような被リンクを送るだけの手法では逆に剣先順位を下げてしまうリスクも生じてしまいます。検索エンジンの最適化・コンテンツの最適化といった両面から優秀なホームページを制作することでSEOに対するお客様の求める結果をご提供させていただいております。</p></li>
        <li><h5>臨機応変</h5><p>SEOにおいて重要な要素である検索エンジンのアルゴリズムですが、これらは日々ルールの変更を行なっております。例えば、スマートフォンが普及した昨今では、スマホ対応（モバイルフレンドリー）がされていないサイトでは、検索結果が著しく下がるといった環境にあります。このような検索エンジンのルールが日々変更されている中で、<?php echo $city; ?>ホームページ制作.COMでは検索エンジンのルールが変わるたびにホームページを適応させ検索順位の下降を防ぎます。</p></li>
        <li><h5>結果重視</h5><p>ホームページ集客のゴールは、アクセスを増やすことではなくあくまで事業の売上に貢献することです。SEOは検索順位が上位に表示され、トラフィックを増やすことが目的ではありません。本当の目的は反響や売上が増えて初めて目標の達成と言えるのではないでしょうか。<?php echo $city; ?>ホームページ制作.COMでは「結果にコミットするホームページ」の提案（新規ホームページ制作からリニューアル）まで一貫してご提案いたします。</p></li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
    </div>
  </section>
  <!-- end seo -->
  
  <section id="reason">
    <div class="reason_inr">
      <div class="reason_inr_box">
        <h2><span class="en">challenge</span>代理店には頼らない<br class="sp">新しい独自フロー</h2>
        <ul class="col2">
          <li>
           <h4>代理店に頼らない独自集客をするホームページ制作会社です</h4>
            <p><?php echo $city; ?>にある通常のホームページ制作会社では、代理店経由で仕事を受注するため少ない⼈材とコストで業務を⾏わなければならないといったホームページ制作業界独特の風潮があります。</p>
            <p>しかし弊社では、代理店やコンペに頼らず、ホームページからの独⾃集客でお仕事を受けているためホームページ制作にコストを回すことができる仕組みを作りました。</p>
          </li>
          <li>
            <h4>WordPressに特化したホームページ制作会社です</h4>
            <p>WordPress（ワードプレス）にこだわっています。WordPressはGoogleの幹部が認めるほどSEOに強く、管理画⾯は直感的で使いやすいため、ページの追加も簡単です。WordPressの専⽤エンジニアが年間100件を越えるカスタマイズを⾏うことによって、同じWordPressでも他の業者とは違ってGoogleに評価されるホームページを制作することができるのです。</p>
          </li>
        </ul>
      </div>
      <div class="reason_inr_box">
        <h2><span class="en">GUIDELINE</span>圧倒的なコスパを実現。</h2>
        <ul class="col2">
          <li>
           <h4>ガイドラインの徹底活用</h4>
            <p>全てのお客様に⾼品質な作品を提供できるよう、ガイドラインによる社内標準化を図っております。W3C標準に準拠したユーザビリティの⾼い、無駄のないソースコードでホームページを制作します。結果としてGoogleからの評価が⾼くなり、SEOの効果が期待できます。</p>
            <p>さらに作業⼯数の削減につながり、低価格でクオリティの⾼いホームページを制作できるようになるのです。</p>
          </li>
          <li>
            <h4>ホームページは作った後が大切</h4>
            <p>弊社では、ホームページを作った後の運⽤がとても⼤切と考えております。これまでのホームページ制作会社では、お客様の予算を全て制作に使ってしまう考えをしております。</p>
            <p>私たちは作った後の運⽤もしっかりと考えていただきたいと思っておりますので、低価格でホームページを作り、そのあともちゃんと予算をかけて運⽤していけるためにも導⼊しやすい⾦額に設定いたしました！</p>
          </li>
        </ul>
      </div>
      <div class="reason_inr_box">
        <h2><span class="en">strength</span>他のホームページ制作会社とは違います。</h2>
        <ul class="col2">
          <li>
            <h4>リスティング広告の有資格者がサポート</h4>
            <p>ホームページを制作した後に、多くの方々がホームページからWEBで集客をしたいと思いリスティング広告を活用されています。弊社では、リスティング広告運用有資格者とWebデザイナーが相談して、より効果的なリスティング広告運用ができるようにホームページをデザイン段階から設計いたします。</p>
          </li>
          <li>
            <h4>ヒートマップツールの無料導入</h4>
            <p>ユーザーのサイト内での行動をサーモグラフィーで見える化できるコンサルティング現場では必ず使われるヒートマップツールを無料でホームページに導入いたします。Web場でのユーザーの動きをより細かく分析することでより良いホームページ運用が可能になります。</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- end reason -->
  
  <section id="faq">
    <div class="faq_inr">
      <h2><span class="en">Q&amp;A</span>よくあるご質問</h2>
      <ul class="col2">
        <li>
          <h4>ホームページに関する知識がないのですが。</h4>
          <p>半数以上の⽅は、ホームページ制作に詳しくありませんのでご安⼼ください。お客様にご理解いただける⾔葉で説明するよう努めておりますので、お気軽にご相談ください。</p>
        </li>
        <li>
          <h4>制作期間を教えてください。</h4>
          <p>契約の書類が全て整ってから30⽇~60程度となります。お急ぎの⽅はご相談ください</p>
        </li>
        <li>
          <h4>支払いはどのようにすればいいですか。</h4>
          <p>クレジットカードまたは⼝座振込からお選びいただけます。【クレジットカードの場合】別途メールにてご連絡致しますのでそちらよりお⼿続きをお願いいたします。</p>
        </li>
        <li>
          <h4>契約期間はどのくらいですか。</h4>
          <p>基本的な契約期間は2年間です。その後は2年契約の⾃動延⻑となります。</p>
        </li>
        <li>
          <h4>月々の管理費を教えてください。</h4>
          <p>サーバー・ドメイン・メールアドレス管理費として毎月9,000円（＋税）がかかります。</p>
        </li>
        <li>
          <h4>デザインの修正はできますか。</h4>
          <p>創業プランはお客様からいただいた原稿を元に弊社がオリジナルでデザインを⾏いますが、デザインの修正は基本的にはできませんので、オプションとなります。</p>
        </li>
        <li>
          <h4>49,800円でホームページが<br class="sp">制作できるのですか。</h4>
          <p>はい、ご安⼼ください。創業プランの制作費は基本的に49,800円（＋税）以外はかかりません。オプションとしてかかるものは「撮影」「取材・原稿作成」「追加ページ」などがございますが、必要なものは別途お⾒積書を提出いたします。制作事例、お客様の声、スタッフ紹介など各カテゴリーの追加は1件につき10,000円+ 税のオプション追加費⽤がかかります。</p>
        </li>
        <li>
          <h4>ホームページの改修・リニューアルも<br class="sp">できますか？</h4>
          <p>もちろんホームページの改修・リニューアルもお受けしております。お問い合わせフォームよりご相談ください。</p>
        </li>
        <li>
          <h4>SEO対策って何をするんですか？</h4>
          <p>検索結果で狙ったキーワードを上位表示させるSEO対策ですが、検索結果で上位表示させるために内部施策を行います。検索結果で上位表示したいキーワードを決定し、そのキーワード軸とした関連キーワードのツリーマップなども制作します。</p>
        </li>
        <li>
          <h4>コンテンツSEOってなんですか？</h4>
          <p>コンテンツSEOとは、狙ったキーワード似合わせて投稿形式でユーザーにとって有益な情報を提供することを指します。コンテンツSEOを行うことでTOPページ以外のページでも集客を行うことができ、ロングテールでユーザーを獲得する施策として効果的です。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- end faq -->
  
  <section id="flow">
    <div class="flow_inr">
      <h2><span class="en">FLOW</span>お申し込みから制作、<br class="sp">公開までの流れ</h2>
      <ul class="col4">
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step1.png" alt="step1"></figure>
          <h4>お申し込み</h4>
          <p>まずは、お問合せフォームから「どんなホームページを作りたいか」をお聞かせください。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step2.png" alt="step1"></figure>
          <h4>ヒアリング</h4>
          <p>実際に面談で打ち合わせなどを行い、ホームページの目的やターゲット顧客・コンテンツなどの必要な情報をお聞かせください。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step3.png" alt="step1"></figure>
          <h4>ご確認</h4>
          <p>お客様の原稿をもとにホームページをクオリティの高い効果的なデザインを制作します。</p>
        </li>
        <li>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/step4.png" alt="step1"></figure>
          <h4>納品</h4>
          <p>納品はゴールではなくスタートですので、ホームページを更新・追加して育てていきましょう。</p>
        </li>
      </ul>
      <div class="view_btn"><a class="arrow" href="#contact">相談してみる</a></div>
    </div>
  </section>
  <!-- end flow -->
  
  <section id="contact">
    <div class="contact_inr">
      <h2><span class="en">CONTACT</span>お問い合わせ</h2>
      <div id="document" class="contact_inr_input"><!--本番公開はkey19 ローカル環境は6070-->
        <?php echo do_shortcode( '[mwform_formkey key="19"]' ); ?>
      </div>
    </div>
  </section>
  <!-- end contact-->
  
  <section id="news">
    <div class="news_inr">
      <h2><span class="en">NEWS</span>ニュース<span>ホームページに関するあれこれを発信しております。</span></h2>
      <ul class="col2">
        <?php
        $loop = new WP_Query (array(
          'post_type'			=> 'news',
          'order'				=> 'DESC',
          'posts_per_page'	=> 2,
        ));
        while ($loop -> have_posts()) : $loop -> the_post();
        ?>
        <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
              <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
              <?php endif ; ?>
            </figure>
            <div class="textbox">
              <div class="info">
                <?php if(is_object_in_term( $post->ID, 'newscat')): ?>
                <i><?php $terms = get_the_terms($post->ID, 'newscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i>　|<?php endif ; ?>
                <h4><?php the_title(); ?></h4>
                <time>
                  <?php the_time('Y.m.d'); ?>
                </time>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <ul class="col4">
        <?php
        $loop = new WP_Query (array(
            'post_type'			=> 'news',
            'order'				=> 'DESC',
            'posts_per_page'	=> 4,
            'offset' => 2
        ));
        while ($loop -> have_posts()) : $loop -> the_post();
        ?>
        <li <?php if( $days > $news ){ print 'class="new"'; } ?>>
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
              <?php $title= get_the_title(); the_post_thumbnail('list-thumb' , array( 'alt' =>$title, 'title' => $title)); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/thumb-noimage.jpg" alt="NoImage" />
              <?php endif ; ?>
            </figure>
            <div class="textbox">
              <div class="info">
                <?php if(is_object_in_term( $post->ID, 'newscat')): ?>
                <i><?php $terms = get_the_terms($post->ID, 'newscat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></i>　|<?php endif ; ?>
                <h4><?php the_title(); ?></h4>
                <time>
                    <?php the_time('Y.m.d'); ?>
                </time>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="view_btn"><a class="arrow" href="/news/">もっと見る</a></div>
    </div>
  </section>
  <!-- end news -->
</main>
<!-- end main -->
<?php get_footer(); ?>
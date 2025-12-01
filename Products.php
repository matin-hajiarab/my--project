<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جیک جیکستون</title>
</head>
<body>
    <style>
        /*تنظیمات عمومی*/
        *{
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    direction: rtl;
    background: #f9f9f9;
  }
  a {
    text-decoration: none;
    color: inherit;
  }
  
/* =============== محصولات=============== */
section.products {
  max-width: 1100px;
  margin: 60px auto 40px;
  padding: 0 20px;
}
section.products h3 {
  font-size: 38px;
  color: #1a237e;
  margin-bottom: 25px;
  font-weight: 1000;
  text-align: center;
}
.product-list {
  margin-bottom: 25px;
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap: 25px;
}
.product-card {
  background-color: white;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  height: 100%;
}
.product-card:hover {
  transform: translateY(-7px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}
.product-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  object-position: center;
  display: block;
  border-bottom: 3px solid #ffca28;
  flex-shrink: 0;
}
.product-info {
  padding: 15px 20px;
  text-align: right;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.product-info h4 {
  margin: 0 0 8px 0;
  font-size: 20px;
  color: #1a237e;
  font-weight: 700;
}
.product-info p {
  font-size: 14px;
  color: #666;
  height: 40px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.product-info span.price {
  display: inline-block;
  margin-top: 10px;
  font-weight: 700;
  color: #ff6f00;
  font-size: 18px;
}
    </style>
      <?php
  include("header.html")
  ?>
      <section class="products">
        <h3> غذای پرندگان </h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://petshoptehran.com/wp-content/uploads/2022/09/%D8%AA%D8%AE%D9%85-%D9%85%D8%B1%D8%BA%DB%8C-%D9%BE%D8%B1%D9%86%D8%AF%D9%87-%D8%B1%D8%A7%D9%81.jpg" alt="غذا پرنده" />
                <div class="product-info">
                  <h4>راف – RAFF Fruttovo</h4>
                  <p>غذای پرندگان زینتی با تخم مرغ و میوه</p>
                  <span class="price">160,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://petibird.ir/wp-content/uploads/2024/09/%D8%A7%D8%B1%D8%B2%D9%86-%D8%AE%D9%88%D8%B4%D9%87%E2%80%8C%D8%A7%DB%8C-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86%DB%8C-%D9%BE%D8%AA%DB%8C-%D8%A8%D8%B1%D8%AF-3.webp" alt="غذا پرنده" />
            <div class="product-info">
              <h4>ارزن خوشه ای</h4>
              <p>ارزن خوشه ای ایرانی ضد عفونی شده</p>
              <span class="price">140,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://petibird.ir/wp-content/uploads/2025/02/%DA%AF%D8%B1%D8%A7%D9%86%D9%88%D9%84-%D8%B3%D8%A8%D8%B2%DB%8C%D8%AC%D8%A7%D8%AA.webp" alt=" غذای پرنده" />
            <div class="product-info">
              <h4> گرانول سبزیجات</h4>
              <p>گرانول سبزیجات مناسب برای انواع پرنده</p>
              <span class="price">190,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKaqlS6D1wju8OPycArm-QFkoN3q6PSdJyVA&s" alt="اسباب بازی پرنده" />
            <div class="product-info">
              <h4>دان مخصوص مرغ</h4>
              <p>دان مخصوص مرغ و جوجه مرغ و بلدرچین</p>
              <span class="price">790,000 تومان</span>
            </div>
          </div>
        </div>
        <h3> قفس پرندگان </h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://dkstatics-public.digikala.com/digikala-products/0c84de9fe6135a83203fe9403c149454f83781cb_1631031824.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90" alt="غذا پرنده" />
                <div class="product-info">
                  <h4>قفس ساده</h4>
                  <p>قفس ساده مناسب برای انواع پرنده </p>
                  <span class="price">180,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://pet-bazzar.com/wp-content/uploads/2024/08/small-travel-cage-3.jpg" alt="غذا پرنده" />
            <div class="product-info">
              <h4> قفس مسافرتی</h4>
              <p>قفس مسافرتی برای حمل و نقل آسان</p>
              <span class="price">380,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://tehrantooti.com/wp-content/uploads/2025/07/Cage-gold-parrot-1.jpg" alt="قفس پرنده" />
            <div class="product-info">
              <h4>قفس پرندگان و طوطی مدل مسافرتی</h4>
              <p>قفس مناسب برای پرندگان زینتی عروس هلندی و کوتوله....</p>
              <span class="price">1.200,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://dkstatics-public.digikala.com/digikala-products/f9bfbabe7dc2ed5234e43168058d948fecc6184c_1594728555.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90" alt="قفس پرنده" />
            <div class="product-info">
              <h4>قفس مرغ</h4>
              <p> قفس مرغ تخمگذار برای بازدهی بیشتر</p>
              <span class="price">1200,000 تومان</span>
            </div>
          </div>
        </div>
        <h3> اسباب بازی پرندگان </h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://petibird.ir/wp-content/uploads/2024/11/%D8%AF%D9%85%D8%A8%D9%84-%D8%AD%D9%84%D9%82%D9%87-%D8%AF%D8%A7%D8%B1-%D9%BE%D8%AA%DB%8C-%D8%A8%D8%B1%D8%AF-1-768x768.webp" alt="اسباب بازی پرندگان " />
                <div class="product-info">
                  <h4>دمبل حلقه دار</h4>
                  <p>اسباب بازی دمبل حلقه دار مناسب طوطیسانان</p>
                  <span class="price">28,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://petibird.ir/wp-content/uploads/2024/12/%D9%BE%D9%84-%D9%85%D8%B9%D9%84%D9%82-%DB%B1-%D9%85%D8%AA%D8%B1%DB%8C-%D9%BE%D8%AA%DB%8C-%D8%A8%D8%B1%D8%AF-1-768x768.webp" alt="اسباب بازی پرندگان" />
            <div class="product-info">
              <h4>پل معلق</h4>
              <p> پل معلق 1متری</p>
              <span class="price">110,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://petibird.ir/wp-content/uploads/2024/12/%D9%86%D8%B1%D8%AF%D8%A8%D8%A7%D9%86-%D8%B3%D8%A7%DB%8C%D8%B2-2-%D9%BE%D8%AA%DB%8C-%D8%A8%D8%B1%D8%AF-3-768x768.webp" alt=" اسباب بازی پرنده" />
            <div class="product-info">
              <h4>نردبان  </h4>
              <p> نردبان 50و30 سانتی متری</p>
              <span class="price">50,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://dkstatics-public.digikala.com/digikala-products/96066e5c4522498a5f6f707a888e3eca81e2d021_1736223358.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/quality,q_90" alt="اسباب بازی پرنده" />
            <div class="product-info">
              <h4>اسباب بازی پرندگان - زنجیر بازی</h4>
              <p>اسباب بازی عروس هلندی، کوتوله برزیلی، گرینچک، قناری، فنج، مرغ عشق و تمام پرندگان </p>
              <span class="price">70,000 تومان</span>
            </div>
          </div>
        </div>
        <h3>متعلقات</h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://sepaspet.com/wp-content/uploads/2023/10/021-600x600.jpg" alt="متعلقات " />
                <div class="product-info">
                  <h4> ابخوری خانواده</h4>
                  <p>ابخوری خانواده مخصوص پرورش گله ای</p>
                  <span class="price">30,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://sepaspet.com/wp-content/uploads/2023/10/024.jpg" alt="متعلقات " />
            <div class="product-info">
              <h4>ابخوری مدل کلاغی  </h4>
              <p>آبخوری مدل کلاغی مناسب انواع پرنده</p>
              <span class="price">25,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://sepaspet.com/wp-content/uploads/2023/09/jadani1-1-600x600.jpg" alt="متعلقات" />
            <div class="product-info">
              <h4>دانخوری</h4>
              <p>دانخوری پرنده مدل سه چشمه </p>
              <span class="price">30,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://sepaspet.com/wp-content/uploads/2022/09/18-600x600.jpg" alt="متعلقات"/>
            <div class="product-info">
              <h4>دانخوری ارزن</h4>
              <p> دانخوری ازن مکانیزه مدل سیلویی </p>
              <span class="price">70,000 تومان</span>
            </div>
          </div>
        </div>
    </section>
    <?php
  include("footer.html")
  ?>
</body>
</html>
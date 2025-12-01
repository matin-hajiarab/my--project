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
        <h3> بلدرچین</h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://tiktarh.com/storage/old/2022/06/Shanml1001244www.tiktarh.com_.jpg" alt="غذا پرنده" />
                <div class="product-info">
                  <h4>بلدرچین </h4>
                  <p>بلدرچین ژاپنی تخم گذار و گوشتی</p>
                  <span class="price">70,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://healthy-food-near-me.com/wp-content/uploads/2022/09/california-quail-description-of-the-breed-1.webp" alt="غذا پرنده" />
            <div class="product-info">
              <h4>بلدرچین زینتی</h4>
              <p> بلدرچین کالیقرنیا</p>
              <span class="price">700,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://static.niazerooz.com/Im/O/96/1211/C600X500_166482147480.jpg" alt=" غذای پرنده" />
            <div class="product-info">
              <h4>بلدرچین زینتی</h4>
              <p>بلدرچین مینیاتوری آسیایی</p>
              <span class="price">500,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://www.jahaneshimi.com/wp-content/uploads/2022/02/%D8%AE%D9%88%D8%A7%D8%B5-%D8%AA%D8%AE%D9%85-%D9%87%D8%A7%DB%8C-%D8%A8%D9%84%D8%AF%D8%B1%DA%86%DB%8C%D9%86.jpg" alt="اسباب بازی پرنده" />
            <div class="product-info">
              <h4>تخم نطفه دار</h4>
              <p>تخم نطفه دار بلدرچین</p>
              <span class="price">4,000 تومان</span>
            </div>
          </div>
        </div>
        <h3>مرغ-خروس</h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrdHaPT6M7NQOXVn_XY0NpsA3tgJVga84QqA&s" alt="غذا پرنده" />
                <div class="product-info">
                  <h4>خروس لاری</h4>
                  <p>خروس لاری واکسینه قد 60</p>
                  <span class="price">1.800,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://makianiran.com/wp-content/uploads/2022/08/Product-site.webp" alt="غذا پرنده" />
            <div class="product-info">
              <h4>خروس گلپایگانی</h4>
              <p>خروس گلپایگانی مناسب کشتار</p>
              <span class="price">200,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://media.khabaronline.ir/d/2023/02/02/0/5803854.webp?ts=1675319661318" alt="قفس پرنده" />
            <div class="product-info">
              <h4>مرغ ایام سمانی</h4>
              <p>مرغ ایام سمانی تخم گذار</p>
              <span class="price">1.000,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://razebaghaa.ir/files/fa/news/1403/6/19/17710_694.jpg" alt="قفس پرنده" />
            <div class="product-info">
              <h4> مرغ کوشین</h4>
              <p>مرغ کوشین تخم گذار در رنگ های مختلف</p>
              <span class="price">900,000 تومان</span>
            </div>
          </div>
        </div>
        <div class="product-list">
            <div class="product-card">
                <img src="https://rashaofogh.com/wp-content/uploads/2023/11/native-chicken-training-course-324x280.webp" alt="اسباب بازی پرندگان " />
                <div class="product-info">
                  <h4> مرغ گلپایگانی</h4>
                  <p>مرغ گلپایگانی تخم گذار واکسینه شده</p>
                  <span class="price">350,000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://ariatoyor.com/wp-content/uploads/2017/12/ariatoypr-3-min.jpg" alt="اسباب بازی پرندگان" />
            <div class="product-info">
              <h4>مرغ مرندی</h4>
              <p>مرغ مرندی black</p>
              <span class="price">500,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://toyuransaze.com/wp-content/uploads/2021/08/%D8%A7%D9%86%D9%88%D8%A7%D8%B9-%D9%86%DA%98%D8%A7%D8%AF-%D9%85%D8%B1%D8%BA-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86%DB%8C.jpg" alt=" اسباب بازی پرنده" />
            <div class="product-info">
              <h4>مرغ مرندی </h4>
              <p>مرغ مرندی white</p>
              <span class="price">500,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Silky_bantam.jpg/1200px-Silky_bantam.jpg" alt="اسباب بازی پرنده" />
            <div class="product-info">
              <h4>مرغ ابریشمی</h4>
              <p>مرغ ابریشمی اصل</p>
              <span class="price">4.000,000 تومان</span>
            </div>
          </div>
        </div>
        <h3>کبوتر</h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://razebaghaa.ir/files/fa/news/1403/9/25/26743_862.jpg" alt="متعلقات " />
                <div class="product-info">
                  <h4>كبوترهای مونداین</h4>
                  <p>کبوتر مونداین مناسب کشتار
                    (کبوتر های شبیه به مرغ با وزن1تا3کیلو)</p>
                  <span class="price">700.000 تومان</span>
                </div>
              </div>
          <div class="product-card">
            <img src="https://razebaghaa.ir/files/fa/news/1403/2/31/9760_536.jpg" alt="متعلقات " />
            <div class="product-info">
              <h4>کبوتر بخارا (جارچی)</h4>
              <p>کبوتر بخارا یکی از زیباترین و گران‌قیمت‌ترین انواع نژاد کبوتر</p>
              <span class="price">1.500,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://www.onlypet.ir/upload/user/upboxs/1385775037.jpg" alt="متعلقات" />
            <div class="product-info">
              <h4> کبوتر دمنده</h4>
              <p> کبوتر دمنده می‌تواند به صورت حیرت‌آوری در سینه و گردن و سر خود بدمد</p>
              <span class="price">1.100,000 تومان</span>
            </div>
          </div>
          <div class="product-card">
            <img src="https://www.onlypet.ir/upload/user/upboxs/1459519869.jpg" alt="متعلقات"/>
            <div class="product-info">
              <h4> کبوتر چین‌دار شرقی</h4>
              <p>شاخص ترین ویزگی این نوع پرنده منقار کوچک آنها است</p>
              <span class="price">900,000 تومان</span>
            </div>
          </div>
        </div>
    </section>
    <?php
  include("footer.html")
  ?>
</body>
</html>
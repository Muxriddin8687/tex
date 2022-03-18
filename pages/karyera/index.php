<?php
    
    // header section
    include "../../inc/header_lib.php";

    $region = $table->getAll('region');
    $title_text = 'YANGILIKLAR';
    $title_img = 'url(../../assets/img/products/2.jpg);';

    //banner section
    include "../../parts/_banner_img.php";

    if (isset($_POST["insertKaryera"]))
    {
        $name = $product->test_input($_POST['name']);
        $borthday = $product->test_input($_POST['borthday']);
        $hobby = $product->test_input($_POST['hobby']);
        $email = $product->test_input($_POST['email']);
        $adress = $product->test_input($_POST['adress']);
        $region_id = $product->test_input($_POST['region_id']);
        $file = $humans->test_pdf($_FILES);
        $about = $product->test_input($_POST['about']);
        var_dump($_FILES['file']);

        $result = $humans->addKaryera($name, $borthday, $hobby, $email, $adress, $region_id, $file, $about);
    }

?>

    <!-- karyera section -->
    <section id="karyera">
        <div class="container py-5">
            <div class="row">

                <div class="mx-auto col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6">
                    <img src="../../assets/img/products/2.jpg" class="img-fluid">
                    <h3 class="font-weight-bold my-3">Bakan Tex</h3>
                    <p class="mt-3">Bakan Tex – Bu Xalqaro Miqyosda Mahsulot Ishlab Chiqaruvchi va Muntazam O’sayotgan Kompaniya. Oldimizdagi vazifalarimiz katta! Bizning hodimlarimiz o’z oldilariga qo’yilgan maqsadlarga muvaffaqiyat ila erishmoqdalar va innovatsion fikrlarni singdirgan holda doimiy o’zgarib borayotgan bozor iqtisodiyotiga yangi impulslarni o’rnatmoqdalar.</p>
                    <p class="my-3">Bozordagi mavjud pozitsiyamizni kengaytirish va mustahkamlash yolida biz bilan ishlashni istaysizmi? O’z salohiyatingizni qo’llagan holda o’zgarishlar ustida ishlash va yangi tajribalarga erishishga hamda kelajagimizni barpo etishda faol qatnashishga Sizda qiziqish bormi? Unday bo’lsa biz Siz bilan tanishishdan juda mamnun bo’lamiz!</p>
                    <h3 class="font-weight-bold my-3">AFSUSKI, AYNI VAQTDA BIZDA BO’SH ISH O’RINLARI MAVJUD EMAS</h3>
                    <p>Sizni qiziqtirgan ish o’rni uchun <a href="#" class="text-red">hr@bakantex.com</a> electron manziliga o’z rezyumeingizni yuboring. Maktub sarlavhasiga “Vakantsiya yuzasidan” belgisi ostida lavozimni ko’rsatib o’ting. Ayni vaqtdagi bo’sh ish o’rinlari ichida sizga mos keladigani mavjud bo’lmasa, Siz o’z rezyumeingizni bizga yo’nalish va lavozimingizni ko’rsatgan holda yuborishingiz mumkin. Bu holda Siz haqingizdagi ma’lumot Bakan Tex kadrlar bilan ishlash bo’limi bazasiga kelib tushadi va Sizga munosib ish o’rni ochilishi bilan biz Sizni, albatta, suhbatga chaqiramiz.</p>
                </div>

                <div class="mx-auto col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6">
                    <div class="border p-4 text-center">
                        <h4 class="my-4">BAKANTEX da karyera qiling</h4>
                        <h2 class="mt-3">Hoziroq boshlang!!</h2>
                        <!-- karyera form -->
                        <form method="post" enctype="multipart/form-data">

                            <input type="text" name="name" placeholder="Familya, ism va sha'rifingizni yozing*" class="form-control" required><br />
                            <input type="text" name="borthday" placeholder="Tug'ilgan yilingiz*" class="form-control" required><br />
                            <input type="text" name="hobby" placeholder="Siz qiziqtiradigan ish o'rni*" class="form-control" required><br />
                            <input type="text" name="phone" placeholder="Telefon*" class="form-control" required><br />
                            <input type="text" name="email" placeholder="Email" class="form-control"><br />
                            <input type="text" name="adress" placeholder="Doimiy yashash joyingiz" class="form-control"><br />
                            
                            <select class="form-control" name="region_id">
                                <option selected>Viloyatingizni tanlang:</option>
                                <?php
                                    foreach($region as $i){
                                        echo "<option value=" . $i['id'] . ">" . $i['region_name'] . "</option>";
                                    }
                                ?>
                            </select>   <br />

                            <p class="mb-1 text-left font-weight-bold">Rezyumeingizni joylang<br />PDF fayl 10 MB dan oshmasligi kerak.</p>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label text-left" for="customFile">Faylni kiriting</label>
                            </div>   <br /><br />

                            <textarea name="about" rows="5" placeholder="Siz haqingizda / avvalgi ish tajribasi / oilaviy sharoit va ma'lumotingiz*" required class="form-control"></textarea><br />
                            <button type="submit" name="insertKaryera" class="bg-red text-light py-2 border-0 rounded-pill px-4">Rezyume jo'natish</button>
                        </form>
                    </div>

                    <?php
                        // calling section
                        include "../../parts/_calling_content.php";
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- /karyera section -->

<?php
    // footer section
    include "../../inc/footer_lib.php";
?>
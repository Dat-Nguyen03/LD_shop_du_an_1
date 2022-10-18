<?php
// session_start();
if (isset($_SESSION['users'])) {
    $data_user = json_decode(json_encode($_SESSION['users']), true);
}
?>
<?php foreach ($san_pham_cts as $key => $value) { ?>
    <div class="trangctsp">
        <div class="anhsp">
            <img src="public/images/<?php echo $value->hinh; ?>" alt="" class="ct1">
            <div class="ctsp1">
                <img src="public/images/<?php echo $value->hinh; ?>" alt="" class="ct2">
                <img src="public/images/<?php echo $value->hinh; ?>" alt="" class="ct2">
                <img src="public/images/<?php echo $value->hinh; ?>" alt="" class="ct2">
                <img src="public/images/<?php echo $value->hinh; ?>" alt="" class="ct2">
            </div>

        </div>

        <div class="ctsp">

            <div class="tenspct"><?php echo $value->ten_hh; ?></div>
            <div class="danhgiact1">
                <div class="saoct"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="sodanhgiact"> 2 Đánh Giá</div>
                <div class="soluotban">9 Đã Bán</div>

            </div>
            <div class="giatienct">
                <div class="giagocct">₫ <?php echo number_format($value->giam_gia) ?></div>
                <div class="giabanct">₫<?php echo number_format($value->don_gia) ?></div>
            </div>
            <div class="baohiemct">
                <div class="baohien1">Bảo Hiểm</div>
                <div class="baohiem2">Bảo hiểm Thiết bị điện tử <i class="fa-solid fa-check"></i>
                </div>
            </div>
            <div class="baohiemct">
                <div class="baohien1">Vận Chuyển</div>
                <div class="baohiem2"><i class="fa-solid fa-truck"></i> Miễn phí vận chuyển <i class="fa-solid fa-check"></i>
                </div>
            </div>
            <div class="soluongct">
                <div class="soluongct1">Số Lượng</div>
                <div class="soluongct2">
                    <button class="trusl"><i class="fa-solid fa-minus"></i></button>
                    <button class="sosl">1</button>
                    <button class="trusl"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            <div class="muact">
                <div class="muact1"><i class="fa-solid fa-cart-shopping"></i> Thêm Vào Giỏ Hàng</div>
                <div class="muact2">Mua Ngay
                </div>
            </div>
            <div class="chinhsachct">
                <div class="chinhsachct1"><i class="fa-solid fa-rotate-left iconct"></i> 7 ngày miễn phí trả hàng
                </div>
                <div class="chinhsachct1"><i class="fa-solid fa-check iconct"></i> Hàng chính hãng 100%</div>
                <div class="chinhsachct1"><i class="fa-solid fa-truck iconct"></i> Miễn phí vận chuyển</div>
            </div>

        </div>

    </div>
    <div class="motaspct">

        <h2 class="mtct">MÔ TẢ SẢN PHẨM</h2>
        <div class="mtct1">
            <div class="mtct2">Mô tả chi tiết:</div>
            <div class="mtct2"><?php echo $value->mo_ta ?></div>
        </div>

    </div>
<?php } ?>
<div class="binhluansp">
    <h2 class="blct">ĐÁNH GIÁ SẢN PHẨM</h2>
    <?php foreach ($binh_luans as $key => $value) { ?>
        <div class="blct1">
            <div class="bltct2"><img src="public/images/<?php echo $value->hinh; ?>" alt="" class="anhblct"></div>
            <div class="bltct3">
                <div class="tenkhbl"><?php echo $value->ho_ten; ?> </div>
                <div class="saobl"><i class="fa-solid fa-star saoblct"></i>
                    <i class="fa-solid fa-star saoblct"></i>
                    <i class="fa-solid fa-star saoblct"></i>
                    <i class="fa-solid fa-star saoblct"></i>
                    <i class="fa-solid fa-star saoblct"></i>
                </div>
                <div class="tgbl">
                    <span><?php echo $value->ngay_bl; ?></span> | Phân loại hàng: <span><?php echo $value->ten_loai; ?></span>

                </div>
                <div class="ndbl"><?php echo $value->noi_dung; ?>

                </div>
                <div class="anhbl">
                    <img src="public/images/<?php echo $value->anhbl; ?>" alt="" class="anhbl4">
                    <img src="public/images/<?php echo $value->anhbl; ?>" alt="" class="anhbl4">
                    <img src="public/images/<?php echo $value->anhbl; ?>" alt="" class="anhbl4">
                    <img src="public/images/<?php echo $value->anhbl; ?>" alt="" class="anhbl4">
                    <img src="public/images/<?php echo $value->anhbl; ?>" alt="" class="anhbl4">

                </div>

            </div>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['users'])) { ?>
        <div class="content_comment" style=" margin: 30px 0;">
            <form action="" method="post">
                <input type="hidden" name="id_kh" id="" value="<?= $data_user[0]['id_kh'] ?>">
                <input type="hidden" name="id_hh" id="" value="<?= $_GET['id_hh'] ?>">
                <textarea rows="5" style="width: 50%; font-size: 18px; outline: none; padding: 10px; resize: none;" placeholder="Enter your comments here..." name="noi_dung"></textarea>
                <button type="submit" name='cmt' style="display: block; width: 120px; height: 40px; margin-top: 15px;background-color: #D41830; color: #fff; font-size: 18px; border: none;">Gửi</button>
            </form>
        </div>
    <?php } ?>    
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</div>
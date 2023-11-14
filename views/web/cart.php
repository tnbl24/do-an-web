<?php
include_once("../layout/header.php");
?>

 <section class="cart">
                <div class="cart-container">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                             <th>
                        <input type="checkbox" id="selectAll"> 
                    </th>
                                <th>Hình ảnh</th>
                                <th>Tên danh mục</th>
                                <th>Màu sắc</th>
                                <th>Giá</th>
                                <th>Tổng cộng</th>
                                <th>Xóa</th>
                               
                        
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="productCheckbox"></td>
                                <td><img src="../material/img/ala hồng phấn.jpg" alt=""></td>
                                <td>
                                    <p>Alaska hồng phấn</p>
                                </td>
                                <td>
                                    <p>hồng phấn</p>
                                </td>
                                <td>
                                    <p>20.000.000 VND</p>
                                </td>

                                <td>
                                    <p>20.000.000 VND</p>
                                </td>
                                <td> <span>X</span> </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="productCheckbox"></td>
                                <td><img src="../material/img/ala nâu đỏ.jpg" alt=""></td>
                                <td>
                                    <p>Alaska nâu đỏ</p>
                                </td>
                                <td>
                                    <p>nâu đỏ</p>
                                </td>
                                <td>
                                    <p>18.000.000 VND</p>
                                </td>

                                <td>
                                    <p>18.000.000 VND</p>
                                </td>
                                <td> <span>X</span> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">TỔNG TIỀN</th>
                            </tr>
                            <tr>
                                <td style="color: black; font-weight: bold">Tổng sản phẩm</td>
                                <td style="">2</td>
                            </tr>
                            <tr>
                                <td style="color: black; font-weight: bold">Tổng thanh toán</td>
                                <td>
                                    <p>38.000.000 VND</p>
                                </td>
                            </tr>
                            
                        </table>
                        <div class="cart-content-right-button">
                            <a href="../web/home.php"><button> Quay lại trang chủ</button></a>
                            <a href="../web/delivery.php"><button> Mua hàng</button></a>
                        </div>
                        
                    </div>
                    <div class="contact-share-button" onclick="sendMessage()">
                <img src="../material/img/fb-messenger.png" alt="Message Icon">   
                </div>
                </div>
            </section>


<?php
include_once("../layout/footer.php");
?>
<?php  
   /**
    * Khai báo class Calulator
    * class Calulator khai 2 thuộc tính kiểu dữ liệu public :   
    *           $a : số nguyên thứ 1.
    *           $b : số nguyên thứ 2.
    */
    class Calulator{
        public $a;
        public $b;
        
    
    /**
     * Viết hàm tính tổng 2 số.
     *Cho phép nhập vào 2 chữ số a, b.
     *Kiểm tra nếu a, b đúng định dạng thì thực hiện phép tính.
     *Nếu a hoặc b chữ đúng định dạng thì thông báo cho người dùng.
    */
    function TinhTong($a,$b){      
        if(is_numeric($a))
        {
            if(is_numeric($b))
                {   //Thực hiện phép tính cộng.
                    $sum = $a + $b;
                    //Hiển thị kết quả của phép tính.
                    echo "Tổng 2 chữ số $a + $b = ";
                }
        }else
        { //Thông báo nếu người dùng nhập sai định dạng.
            echo "a và b phải là chữ số";
        }
        //Trả về Tổng 2 chữ sốs
        return $sum;
    }
    /**
     * Viết hàm tính tích 2 số.  
     *Cho phép nhập vào 2 chữ số a, b.
     *Kiểm tra nếu a, b đúng định dạng thì thực hiện phép tính.
     *Nếu a hoặc b chữ đúng định dạng thì thông báo cho người dùng.
     */
    function TinhTich($a,$b){
        if(is_numeric($a))
            if(is_numeric($b)){
                //Thực hiện phép tính tích.
                $mul = $a * $b;
                //Hiển thị kết quả của phép tính.
                echo "<br>Tích 2 chữ số $a x $b = $mul<br>";
            }else{
                //Nếu a hoặc b không phải là chữ số thì thông báo.
                echo "a và b phải là chữ số";
            }       
    }
    /**
     * Khởi tạo 1 đối tượng @objCalulator của class Calulator với 2 đối số:
     *                              ->set_A : số nguyên thứ 1.
     *                              ->set_B : số nguyên thứ 2.
     */
}
    $objCalulator = new Calulator();
    /**
     * Gọi hàm tính tổng 
     * Hiển thị kết quả tính tổng 2 số nguyên a và b
     */
        echo $objCalulator->TinhTong(4,5);
    /**
     * gọi hàm tính tích
     * Hiển thị kết quả tính tích 2 số nguyên a và b
     * */
        echo $objCalulator->TinhTich(5,6);
?> 
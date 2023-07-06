<?php

namespace App\helper;
// session_start();

header('Content-Type: text/html; charset=utf-8');
class CartHelper
{              
                  public $products = null;
                  public $totalQuanty = 0;
                  public $totalPrice = 0;
              
                  public function __construct()
                  {
                   
                    $this->items =session('cart') ? session('cart') : []; //nếu có thì lấy nó ra còn ko thì cho về mảng rỗng
                      $this->total_price=$this->get_total_price(); 
                      $this->total_quantity=$this->get_total_quantity();
                  }
                  public function add($product,$quantity = 1)//sp nào,chỉ số
                  {
                    $item=[//tạo mảng
                              'id'=>$product->id,
                              'Anh'=>$product->Anh,
                              'Tensp'=>$product->Tensp,
                              'giaban'=>$product->giamoi,
                              'quantity'=>$quantity,
                      ];
                      if(isset($this->items[$product->id]))//theo mảng 2 chiều
                      {
                          $this->items[$product->id]['quantity'] += $quantity;//tăng sl
                      }else
                      {
                          $this->items[$product->id]=$item;//thêm mới
                      }
                       session(['cart'=> $this->items]);//lưu lại
                       
                        }
                  public function remove($id)
                  {
                    if(isset($this->items[$id]))
                    {
                        unset($this->items[$id]);
                    } 
                    session(['cart'=>$this->items]);              
                  }
                  public function update($id,$quantity = 1)
                  {
                    if(isset($this->items[$id]))
                    {
                        $this->items[$id]['quantity'] = $quantity;
                    }
                    session(['cart'=>$this->items]);              
                  }
                  public function clear()
                  {
                    session(['cart'=> '']);              
                  }

                  private function get_total_price()
                  {
                                    $t=0;
                                    foreach($this->items as $item)
                                    {
                                     
                                                      $t+= $item['giaban'] * $item['quantity'];
                                    }
                                    return $t;
                  }
                  
                  private function get_total_quantity()
                  {
                                    $t=0;
                                    foreach($this->items as $item)
                                    {
                                                      $t+=$item['quantity'];
                                    }
                            return $t;        
                  }   
}
?>

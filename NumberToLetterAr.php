<?php
    class NumberToLetterAr{

        function convert($a){
            if ($a<0) return $this->convert(-$a);
            if ($a==0) return '';
            if ($a<13){
                switch ($a){
                    case 0: return 'صفر';
                    case 1: return 'واحد';
                    case 2: return 'إثنان';
                    case 3: return 'ثلاثة';
                    case 4: return 'أربعة';
                    case 5: return 'خمسة';
                    case 6: return 'ستة';
                    case 7: return 'سبعة';
                    case 8: return 'ثمانية';
                    case 9: return 'تسعة';
                    case 10: return 'عشرة';
                    case 11: return 'إحدى عشر';
                    case 12: return 'إثنى عشر';
                }
            } else if ($a<20){
                return $this->convert($a-10).' عشرة';
            } else if ($a<100){
                if ($a%10==0){
                    switch ($a){
                        case 20: return 'عشرون';
                        case 30: return 'ثلاثون';
                        case 40: return 'أربعون';
                        case 50: return 'خمسون';
                        case 60: return 'ستون';
                        case 70: return 'سبعون';
                        case 80: return 'ثمانون';
                        case 90: return 'تسعون';
                    }
                } else{
                    return $this->convert($a%10).' و '.$this->convert($a-$a%10);
                }
            } else if ($a<1000) {
                if ($a%100==0){
                    switch ($a){
                        case 100: return 'مئة';
                        case 200: return 'مئتان';
                        case 300: return 'ثلاثمائة';
                        case 400: return 'أربعمائة';
                        case 500: return 'خمسمائة';
                        case 600: return 'ستمائة';
                        case 700: return 'سبعمائة';
                        case 800: return 'ثمانمائة';
                        case 900: return 'تسعمائة';
                    }
                } else {
                    return  $this->convert(((int)($a/100))*100).' و '. $this->convert($a%100);
                }
            }else if ($a<10000){
                if ($a%1000==0){
                    switch ($a){
                        case 1000: return 'ألف';
                        case 2000: return 'ألفان';
                        case 3000: return 'ثلاثة آلاف';
                        case 4000: return 'أربعة آلاف';
                        case 5000: return 'خمسة آلاف';
                        case 6000: return 'ستة آلاف';
                        case 7000: return 'سبعة آلاف';
                        case 8000: return 'ثمانية آلاف';
                        case 9000: return 'تسعة آلاف';
                    }
                } else {
                return $this->convert($a-($a%1000)).' و '.$this->convert($a%1000);
                }
            }else if ($a<1000000){
                if ($a==10000){
                    return 'عشرةآلاف';
               }else if ($a==100000){
                     return 'مئة ألف';
                }else if($a==200000){
                     return 'مئتي ألف';
                } else {
                    return $this->convert((int)($a/1000)).' ألف و '.$this->convert($a%1000);
                }
            }else if ($a<1000000000){
                if ($a==1000000){
                     return 'مليون';
                }else if($a==200000){
                     return 'مليونين';
                } else {
                    return $this->convert((int)($a/1000000)).' مليون و '.$this->convert($a%1000000);
                }
            }else if ($a<1000000000000){
                if ($a==1000000000){
                     return 'مليار';
                }else if($a==2000000000){
                     return 'مليارين';
                } else {
                    return $this->convert((int)($a/1000000000)).' مليار و '.$this->convert($a%1000000000);
                }
            }
        
        }
        
}
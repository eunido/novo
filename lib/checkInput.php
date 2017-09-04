<?php
// 입력 값에 잘못된 데이터가 없는지 등을 확인하는 함수입니다.
function checkInput($var)
{
  if (is_array($var)) {
    return array_map('checkInput', $var);
  } else {
// magic_quotes_gpcc 에 대한 대책 [레시피 215]을 실시합니다.
    if (get_magic_quotes_gpc()) {
      $var = stripslashes($var);
    }
// null 바이트 공격 대비 [레시피 291]
// null 바이트를 포함한 제어 문자가 포함되었는지 확인합니다 (최대 3000문자).
    if (preg_match('/\A[\r\n\t[:^cntrl:]]{0,5000}\z/u', $var) == 0) {
      die('5000자가 넘었습니다. 다시 입력해주세요.');
    }
// 문자 인코딩을 확인합니다. [레시피 280]
    if (! mb_check_encoding($var, 'UTF-8')) {
      die('잘못된 입력입니다.');
    }
    return $var;
  }
}
/* ?>종료 태그 생략 [레시피 001] */

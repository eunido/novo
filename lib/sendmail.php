<?php
// 메일을 전송하는 함수입니다.
function sendmail($fromName, $from, $to, $subject, $body, $returnPath = null)
{
// 메일 주소나 제목에 줄바꿈 코드가 포함되었는지를 확인합니다.
  if (preg_match('/[\r\n]/', $fromName) !== 0
      || preg_match('/[\r\n]/', $from) !== 0
      || preg_match('/[\r\n]/', $to) !== 0
      || preg_match('/[\r\n]/', $subject) !== 0) {
    die('잘못된 입력이 검출되었습니다.');
  }

  if (is_null($returnPath)) {
    $returnPath = $from;
  }

// From 헤더를 작성합니다.
  $header = 'From: ' . mb_encode_mimeheader($fromName) . ' <' . $from . '>';

// 메일을 전송하고 결과를 돌려줍니다.
// 안전 모드(safe mode) [레시피 283] 가 On의 경우는 제 5인수를 사용할 수 없습니다.
  if (ini_get('safe_mode')) {
    $result = mb_send_mail($to, $subject, $body, $header);
  } else {
    $result = mb_send_mail($to, $subject, $body, $header, '-f' . $returnPath);
  }
  return $result;
}
/* ?>종료 태그 생략 [레시피 001] */

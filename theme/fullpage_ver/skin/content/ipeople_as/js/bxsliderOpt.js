$(document).ready(function() {
    $('.bxslider').bxSlider({
        mode: 'horizontal', // 가로 방향 수평 슬라이드 
        speed: 400, // 이동 속도를 설정 
        slideMargin: 0, // 슬라이드간의 간격 
        startSlide: 0, // 시작슬라이드 인덱스
        infiniteLoop: true, //무한루프
        responsive: true, //반응형 슬라이더 자동 크지 조정
        touchEnabled: true, //터치 스와이프 전환
        pager: true, // 현재 위치 페이징 표시 여부 설정 

        pause: 3000, //전환사이 시간

        auto: true, // 자동 실행 여부 
        autoHover: false, // 마우스 호버시 정지 여부
        controls: true, // 이전 다음 버튼 노출 여부
        autoDelay: 0, // 시작하기전 전환 시간
        moveSlides: 1, // 슬라이드 이동시 개수 
        slideWidth: 0, // 슬라이드 너비 
        minSlides: 1, // 최소 노출 개수 
        maxSlides: 1, // 최대 노출 개수 
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        // touchEnabled: (navigator.maxTouchPoints > 0)



    });

});
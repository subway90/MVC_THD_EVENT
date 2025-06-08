const banner = document.getElementById('running_banner');
const originalContent = banner.innerHTML; // Lưu nội dung gốc
banner.innerHTML += originalContent; // Nhân đôi nội dung để tạo hiệu ứng liên tục

const bannerWidth = banner.scrollWidth; // Chiều rộng tổng của banner
let currentPosition = 0;

function scrollBanner() {
    currentPosition += 1; // Di chuyển 1 pixel
    if (currentPosition >= bannerWidth / 2) { // Dừng lại khi đã cuộn một vòng
        currentPosition = 0; // Đặt lại về đầu
    }
    banner.scrollTo(currentPosition, 0); // Cuộn đến vị trí hiện tại
}

// Chạy hàm scrollBanner mỗi 5ms
setInterval(scrollBanner, 8); // Điều chỉnh tốc độ cuộn
const slogans = [
    "Kiến tạo khoảnh khắc đáng nhớ",
    "Khơi nguồn cảm hứng – Kết nối trải nghiệm",
    "Chạm tới mọi khoảnh khắc – Vẽ nên từng hành trình"
];

let currentIndex = 0;
const sloganElement = document.getElementById('slogan');

function typeSlogan(slogan, callback) {
    sloganElement.textContent = ''; // Xóa nội dung trước khi bắt đầu
    let index = 0;

    const typingInterval = setInterval(() => {
        if (index < slogan.length) {
            sloganElement.textContent += slogan.charAt(index); // Thêm ký tự
            index++;
        } else {
            clearInterval(typingInterval);
            setTimeout(() => {
                revertSlogan(callback);
            }, 2400); // Thời gian giữ câu trước khi thụt lùi
        }
    }, 55); // Tốc độ gõ
}

function revertSlogan(callback) {
    let text = sloganElement.textContent;
    const revertInterval = setInterval(() => {
        if (text.length > 0) {
            text = text.slice(0, -1); // Thụt lùi
            sloganElement.textContent = text; // Cập nhật nội dung
        } else {
            clearInterval(revertInterval);
            callback(); // Gọi lại hàm để gõ câu tiếp theo
        }
    }, 30); // Tốc độ thụt lùi
}

function startTyping() {
    setTimeout(() => {
        typeSlogan(slogans[currentIndex], () => {
        currentIndex = (currentIndex + 1) % slogans.length; // Chuyển sang câu tiếp theo
        startTyping(); // Bắt đầu lại
    });
    }, 120);
}

// Khởi động hiệu ứng khi trang được tải
window.onload = startTyping;
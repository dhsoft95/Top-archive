export default class VideoPlayer {
    constructor() {
        this.videoUrl = 'https://www.youtube.com/embed/IMPbKVb8y8s?si=tJ8Z9BaZQqTM654w';
        this.videoModal = document.getElementById('videoModal');
        this.videoFrame = document.getElementById('youtubeVideo');
        this.initializeEvents();
    }

    initializeEvents() {
        if (this.videoModal) {
            this.videoModal.addEventListener('show.bs.modal', () => this.onModalShow());
            this.videoModal.addEventListener('hide.bs.modal', () => this.onModalHide());
        }
    }

    onModalShow() {
        this.videoFrame.setAttribute('src', this.videoUrl);
    }

    onModalHide() {
        this.videoFrame.setAttribute('src', '');
    }
}

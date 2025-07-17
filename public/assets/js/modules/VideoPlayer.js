export default class VideoPlayer {
    constructor() {
        this.videoUrl = 'https://youtu.be/IMPbKVb8y8s?t=5';
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

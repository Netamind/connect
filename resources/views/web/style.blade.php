<style>
.blog-post .post-details .post-stats {
    white-space: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    color: rgba(105, 105, 115, 1);
    margin-top: 15px;
    margin-bottom: 35px
}

.blog-post .post-details .post-stats .p-category {
    flex-wrap: nowrap;
    display: inline-flex
}

.mobile .blog-post .post-details .post-stats {
    overflow-x: scroll
}

.blog-post .post-details .post-stats::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 5px;
    width: 5px
}

.blog-post .post-details .post-stats::-webkit-scrollbar-track {
    background-color: white
}

.blog-post .post-details .post-stats::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(233, 102, 49, 1)
}

.blog-post .post-details .post-stats .p-posted {
    display: inline-flex
}

.blog-post .post-details .post-stats .p-author {
    display: inline-flex
}

.blog-post .post-details .post-stats .p-date {
    display: inline-flex
}

.p-date-image {
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    background: rgba(15, 58, 141, 1);
    margin: 7px;
    border-radius: 3px
}

.blog-post .post-details .post-stats .p-comment {
    display: inline-flex
}

.blog-post .post-details .post-stats .p-view {
    display: inline-flex
}

.post-details {
    padding-bottom: 20px
}

.post-content>p {
    margin-bottom: 10px
}

.post-content {
    font-size: 15px;
    column-count: initial;
    column-gap: 50px;
    column-rule-style: none
}

.post-image {
    display: block;
    text-align: left;
    float: none
}

.post-image img {
    border-radius: 10px;
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.blog-post .tags {
    margin-top: 15px;
    justify-content: flex-start;
    font-size: 13px;
    font-weight: 700;
    justify-content: center
}

.blog-post .tags a,
.blog-post .tags-title {
    margin-right: 8px;
    margin-bottom: 8px
}

.blog-post .tags b {
    display: none
}

.blog-post .tags a {
    border-radius: 10px;
    padding-right: 8px;
    padding-left: 8px;
    font-size: 13px;
    color: rgba(230, 230, 230, 1);
    font-weight: 400;
    text-decoration: none;
    background: rgba(44, 54, 64, 1)
}

.blog-post .tags a:hover {
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1)
}

.post-comments {
    margin-top: 20px
}

.reply-btn.btn,
.reply-btn.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.reply-btn.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.reply-btn.btn:active,
.reply-btn.btn:hover:active,
.reply-btn.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.reply-btn.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.reply-btn.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .reply-btn.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.reply-btn.btn.btn.disabled::after {
    font-size: 20px
}

.post-comment {
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid
}

.post-reply {
    margin-top: 15px;
    margin-left: 60px;
    padding-top: 20px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.user-avatar {
    display: block;
    margin-right: 15px;
    border-radius: 50%
}

.module-blog_comments .side-image {
    display: block
}

.post-comment .user-name {
    font-size: 18px;
    font-weight: 700
}

.post-comment .user-data div {
    font-size: 12px
}

.post-comment .user-site::before {
    left: -1px
}

.post-comment .user-data .user-date {
    display: inline-flex
}

.post-comment .user-data .user-time {
    display: inline-flex
}

.comment-form .form-group:not(.required) {
    display: flex
}

.user-data .user-site {
    display: inline-flex
}

.main-posts.post-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.main-posts.post-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .main-posts.post-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .main-posts.post-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .main-posts.post-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.side-column .main-posts.post-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

.main-posts.post-grid {
    margin: -10px
}

.post-grid .post-thumb {
    background: rgba(255, 255, 255, 1);
    border-radius: 7px
}

.desktop .post-grid .post-thumb:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.post-grid .post-thumb:hover .image img {
    transform: scale(1.15)
}

.post-grid .post-thumb .caption {
    position: relative;
    bottom: auto;
    width: auto
}

.post-grid .post-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 12px;
    margin-bottom: 12px
}

.post-grid .post-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 18px;
    color: rgba(58, 71, 84, 1)
}

.post-grid .post-thumb .description {
    display: block;
    color: rgba(105, 105, 115, 1);
    text-align: center;
    padding-right: 15px;
    padding-left: 15px
}

.post-grid .post-thumb .button-group {
    display: flex;
    justify-content: center;
    padding: 15px
}

.post-grid .post-thumb .btn-read-more::before {
    display: inline-block
}

.post-grid .post-thumb .btn-read-more::after {
    display: inline-block;
    content: '\e5c8' !important;
    font-family: icomoon !important
}

.post-grid .post-thumb .btn-read-more .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.post-grid .post-thumb .btn-read-more.btn,
.post-grid .post-thumb .btn-read-more.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.post-grid .post-thumb .btn-read-more.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.post-grid .post-thumb .btn-read-more.btn:active,
.post-grid .post-thumb .btn-read-more.btn:hover:active,
.post-grid .post-thumb .btn-read-more.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.post-grid .post-thumb .btn-read-more.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.post-grid .post-thumb .btn-read-more.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .post-grid .post-thumb .btn-read-more.btn:hover {
    box-shadow: none
}

.post-grid .post-thumb .btn-read-more.btn.btn.disabled::after {
    font-size: 20px
}

.post-grid .post-thumb .post-stats {
    display: flex;
    justify-content: center;
    position: absolute;
    transform: translateY(-100%);
    width: 100%;
    background: rgba(240, 242, 245, 0.9);
    padding: 7px
}

.post-grid .post-thumb .post-stats .p-author {
    display: flex
}

.post-grid .post-thumb .image {
    display: block
}

.post-grid .post-thumb .p-date {
    display: flex
}

.post-grid .post-thumb .post-stats .p-comment {
    display: flex
}

.post-grid .post-thumb .post-stats .p-view {
    display: flex
}

.post-list .post-layout:not(.swiper-slide) {
    margin-bottom: 40px
}

.post-list .post-thumb .caption {
    flex-basis: 200px;
    background: rgba(248, 248, 248, 1);
    padding: 20px;
    padding-top: 15px
}

.post-list .post-thumb .image {
    display: block
}

.desktop .post-list .post-thumb:hover {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.post-list .post-thumb:hover .image img {
    transform: scale(1.15)
}

.post-list .post-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto
}

.post-list .post-thumb .name a {
    white-space: normal;
    overflow: visible;
    text-overflow: initial;
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 22px;
    color: rgba(51, 51, 51, 1)
}

.desktop .post-list .post-thumb .name a:hover {
    color: rgba(233, 102, 49, 1)
}

.post-list .post-thumb .description {
    display: block;
    color: rgba(139, 145, 152, 1);
    padding-top: 5px;
    padding-bottom: 5px;
    margin-bottom: 10px
}

.post-list .post-thumb .button-group {
    display: flex;
    justify-content: flex-start
}

.post-list .post-thumb .btn-read-more::before {
    display: inline-block
}

.post-list .post-thumb .btn-read-more .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.post-list .post-thumb .btn-read-more::after {
    content: '\e5c8' !important;
    font-family: icomoon !important
}

.post-list .post-thumb .btn-read-more.btn,
.post-list .post-thumb .btn-read-more.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.post-list .post-thumb .btn-read-more.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.post-list .post-thumb .btn-read-more.btn:active,
.post-list .post-thumb .btn-read-more.btn:hover:active,
.post-list .post-thumb .btn-read-more.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.post-list .post-thumb .btn-read-more.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.post-list .post-thumb .btn-read-more.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.post-list .post-thumb .btn-read-more.btn:hover,
.post-list .post-thumb .btn-read-more.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .post-list .post-thumb .btn-read-more.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.post-list .post-thumb .btn-read-more.btn.btn.disabled::after {
    font-size: 20px
}

.post-list .post-thumb .post-stats {
    display: flex;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    justify-content: flex-start;
    margin-bottom: 10px
}

.post-list .post-thumb .post-stats .p-author::before {
    font-size: 13px
}

.post-list .post-thumb .post-stats .p-author {
    display: block
}

.post-list .post-thumb .p-date {
    display: flex
}

.post-list .post-thumb .post-stats .p-comment {
    display: block
}

.post-list .post-thumb .post-stats .p-view {
    display: flex
}

.blog-feed span {
    display: block;
    color: rgba(105, 105, 115, 1) !important
}

.blog-feed {
    display: inline-flex;
    margin-right: 30px;
    margin-top: -5px
}

.blog-feed::before {
    content: '\f143' !important;
    font-family: icomoon !important;
    font-size: 14px;
    color: rgba(233, 102, 49, 1)
}

.countdown {
    font-family: 'Montserrat';
    font-weight: 400;
    font-size: 15px;
    color: rgba(51, 51, 51, 1);
    background: rgba(240, 242, 245, 1);
    border-radius: 3px;
    width: 90%
}

.countdown div span {
    color: rgba(105, 105, 115, 1)
}

.countdown>div {
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.boxed-layout .site-wrapper {
    overflow: hidden
}

.boxed-layout .header {
    padding: 0 20px
}

.boxed-layout .breadcrumb {
    padding-left: 20px;
    padding-right: 20px
}

.wrapper,
.mega-menu-content,
.site-wrapper>.container,
.grid-cols,
.desktop-header-active .is-sticky .header .desktop-main-menu-wrapper,
.desktop-header-active .is-sticky .sticky-fullwidth-bg,
.boxed-layout .site-wrapper,
.breadcrumb,
.title-wrapper,
.page-title>span,
.desktop-header-active .header .top-bar,
.desktop-header-active .header .mid-bar,
.desktop-main-menu-wrapper {
    max-width: 1280px
}

.desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
    transform: translateX(calc(0px - (100vw - 1280px) / 2))
}

html[dir='rtl'] .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
    transform: none;
    right: calc(0px - (100vw - 1280px) / 2)
}

.desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown.mega-custom::before {
    transform: translateX(calc(0px - (200vw - 1280px) / 2))
}

html[dir='rtl'] .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown.mega-custom::before {
    transform: none;
    right: calc(0px - (200vw - 1280px) / 2)
}

body {
    background: rgba(248, 248, 248, 1);
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 16px;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased
}

#content {
    padding-bottom: 20px
}

.column-left #content {
    padding-left: 30px
}

.column-right #content {
    padding-right: 30px
}

.side-column {
    max-width: 260px;
    padding: 30px;
    padding-top: 0px;
    padding-left: 0px
}

.one-column #content {
    max-width: calc(100% - 260px)
}

.two-column #content {
    max-width: calc(100% - 260px * 2)
}

#column-left {
    border-width: 0;
    border-right-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

#column-right {
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding: 30px;
    padding-top: 0px;
    padding-right: 0px
}

.page-title {
    display: block
}

.dropdown.drop-menu>.j-dropdown {
    left: 0;
    right: auto;
    transform: translate3d(0, -10px, 0)
}

.dropdown.drop-menu.animating>.j-dropdown {
    left: 0;
    right: auto;
    transform: none
}

.dropdown.drop-menu>.j-dropdown::before {
    left: 10px;
    right: auto;
    transform: translateX(0)
}

.dropdown.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.dropdown.dropdown .j-menu .dropdown>a::after {
    display: block
}

.dropdown.dropdown .j-menu>li>a {
    font-size: 14px;
    color: rgba(58, 71, 84, 1);
    font-weight: 400;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 15px
}

.dropdown.dropdown .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.dropdown.dropdown .j-menu>li>a::before {
    margin-right: 7px;
    min-width: 20px;
    font-size: 18px
}

.desktop .dropdown.dropdown .j-menu>li:hover>a,
.dropdown.dropdown .j-menu>li.active>a {
    background: rgba(240, 242, 245, 1)
}

.dropdown.dropdown .j-menu>li>a,
.dropdown.dropdown.accordion-menu .menu-item>a+div,
.dropdown.dropdown .accordion-menu .menu-item>a+div {
    border-style: none
}

.dropdown.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.dropdown.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 200px
}

.dropdown.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.dropdown.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: 7px;
    margin-top: -10px
}

legend {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

legend::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px;
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

legend.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px;
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

legend::after,
legend.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1);
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.title::after,
.title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

html:not(.popup) .page-title {
    font-size: 30px;
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    margin-top: 30px;
    margin-bottom: 30px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

html:not(.popup) .page-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

html:not(.popup) .page-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

html:not(.popup) .page-title::after,
html:not(.popup) .page-title.page-title>span::after {
    width: 100px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.menu-label {
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: none;
    background: rgba(233, 102, 49, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px
}

.btn,
.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.btn:active,
.btn:hover:active,
.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.btn.btn.disabled::after {
    font-size: 20px
}

.btn-secondary.btn {
    background: rgba(13, 82, 214, 1)
}

.btn-secondary.btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.btn-secondary.btn.btn.disabled::after {
    font-size: 20px
}

.btn-success.btn {
    background: rgba(80, 173, 85, 1)
}

.btn-success.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.btn-success.btn.btn.disabled::after {
    font-size: 20px
}

.btn-danger.btn {
    background: rgba(221, 14, 28, 1)
}

.btn-danger.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.btn-danger.btn.btn.disabled::after {
    font-size: 20px
}

.btn-warning.btn {
    background: rgba(233, 102, 49, 1)
}

.btn-warning.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.btn-warning.btn.btn.disabled::after {
    font-size: 20px
}

.btn-info.btn {
    background: rgba(105, 105, 115, 1)
}

.btn-info.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.btn-info.btn.btn.disabled::after {
    font-size: 20px
}

.btn-light.btn,
.btn-light.btn:visited {
    color: rgba(51, 51, 51, 1)
}

.btn-light.btn {
    background: rgba(238, 238, 238, 1)
}

.btn-light.btn:hover {
    background: rgba(226, 226, 226, 1) !important
}

.btn-light.btn.btn.disabled::after {
    font-size: 20px
}

.btn-dark.btn {
    background: rgba(44, 54, 64, 1)
}

.btn-dark.btn:hover {
    background: rgba(58, 71, 84, 1) !important
}

.btn-dark.btn.btn.disabled::after {
    font-size: 20px
}

.buttons {
    margin-top: 20px;
    font-size: 12px
}

.buttons .pull-right .btn,
.buttons .pull-right .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.buttons .pull-right .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.buttons .pull-right .btn:active,
.buttons .pull-right .btn:hover:active,
.buttons .pull-right .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.buttons .pull-right .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.buttons .pull-right .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .buttons .pull-right .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.buttons .pull-right .btn.btn.disabled::after {
    font-size: 20px
}

.buttons .pull-left .btn {
    background: rgba(13, 82, 214, 1)
}

.buttons .pull-left .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.buttons .pull-left .btn.btn.disabled::after {
    font-size: 20px
}

.buttons>div {
    flex: 1;
    width: auto;
    flex-basis: 0
}

.buttons>div .btn {
    width: 100%
}

.buttons .pull-left {
    margin-right: 0
}

.buttons>div+div {
    padding-left: 20px
}

.buttons .pull-right:only-child {
    flex: 1;
    margin: 0 0 0 auto
}

.buttons .pull-right:only-child .btn {
    width: 100%
}

.buttons input+.btn {
    margin-top: 5px
}

.buttons input[type=checkbox] {
    margin-right: 7px !important;
    margin-left: 3px !important
}

.tags {
    margin-top: 15px;
    justify-content: flex-start;
    font-size: 13px;
    font-weight: 700
}

.tags a,
.tags-title {
    margin-right: 8px;
    margin-bottom: 8px
}

.tags b {
    display: none
}

.tags a {
    border-radius: 10px;
    padding-right: 8px;
    padding-left: 8px;
    font-size: 13px;
    color: rgba(230, 230, 230, 1);
    font-weight: 400;
    text-decoration: none;
    background: rgba(44, 54, 64, 1)
}

.tags a:hover {
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1)
}

.nav-tabs>li>a,
.nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .nav-tabs>li:hover>a,
.nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.nav-tabs>li>a::before {
    font-size: 18px
}

.nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.mobile .nav-tabs {
    overflow-x: scroll
}

.nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.tab-container::before {
    display: none
}

.tab-content {
    padding-top: 20px
}

.tab-container {
    display: block
}

.tab-container .nav-tabs {
    flex-direction: row
}

.alert {
    margin-bottom: 20px
}

.breadcrumb {
    display: block !important;
    text-align: left;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 0px;
    white-space: nowrap
}

.breadcrumb::before {
    background: rgba(255, 255, 255, 1)
}

.breadcrumb li:first-of-type a i::before {
    content: '\eb69' !important;
    font-family: icomoon !important;
    top: 1px
}

.breadcrumb a {
    font-size: 13px;
    color: rgba(105, 105, 115, 1)
}

.breadcrumb li:last-of-type a {
    color: rgba(105, 105, 115, 1)
}

.breadcrumb>li+li:before {
    content: '→';
    color: rgba(105, 105, 115, 1);
    top: 1px
}

.mobile .breadcrumb {
    overflow-x: scroll
}

.breadcrumb::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.breadcrumb::-webkit-scrollbar-track {
    background-color: white
}

.breadcrumb::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(233, 102, 49, 1)
}

.panel-group .panel-heading a::before {
    content: '\f067' !important;
    font-family: icomoon !important;
    margin-right: 3px;
    order: 10
}

.desktop .panel-group .panel-heading:hover a::before {
    color: rgba(13, 82, 214, 1)
}

.panel-group .panel-active .panel-heading a::before {
    content: '\f068' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1)
}

.panel-group .panel-heading a {
    justify-content: space-between;
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    padding: 15px;
    padding-right: 5px;
    padding-left: 0px
}

.panel-group .panel-heading:hover a {
    color: rgba(13, 82, 214, 1)
}

.panel-group .panel-active .panel-heading:hover a,
.panel-group .panel-active .panel-heading a {
    color: rgba(15, 58, 141, 1)
}

.panel-group .panel-heading {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.panel-group .panel:first-child .panel-heading {
    border-width: 0px
}

.panel-group .panel-body {
    padding-bottom: 20px
}

body h1,
body h2,
body h3,
body h4,
body h5,
body h6 {
    font-family: 'Montserrat';
    font-weight: 600
}

body a {
    color: rgba(13, 82, 214, 1);
    text-decoration: underline;
    display: inline-block
}

body a:hover {
    color: rgba(233, 102, 49, 1);
    text-decoration: none
}

body p {
    margin-bottom: 15px
}

body h1 {
    margin-bottom: 20px
}

body h2 {
    font-size: 30px;
    margin-bottom: 15px
}

body h3 {
    margin-bottom: 15px
}

body h4 {
    text-transform: uppercase;
    margin-bottom: 15px
}

body h5 {
    font-size: 22px;
    color: rgba(139, 145, 152, 1);
    font-weight: 400;
    margin-bottom: 20px
}

body h6 {
    font-size: 15px;
    color: rgba(255, 255, 255, 1);
    text-transform: uppercase;
    background: rgba(233, 102, 49, 1);
    padding: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    margin-top: 5px;
    margin-bottom: 15px;
    display: inline-block
}

body blockquote {
    font-size: 17px;
    font-weight: 400;
    padding-left: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-width: 0;
    border-left-width: 5px;
    border-style: solid;
    border-color: rgba(233, 102, 49, 1);
    float: none;
    display: flex;
    flex-direction: column;
    max-width: 500px
}

body blockquote::before {
    margin-left: initial;
    margin-right: auto;
    float: none;
    content: '\e9af' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(15, 58, 141, 1);
    margin-right: 10px;
    margin-bottom: 10px
}

body hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    overflow: hidden
}

body .drop-cap {
    font-family: 'Roboto' !important;
    font-weight: 700 !important;
    font-size: 70px !important;
    font-family: Georgia, serif;
    font-weight: 700;
    margin-right: 8px
}

body .amp::before {
    content: '\e901' !important;
    font-family: icomoon !important;
    font-size: 25px;
    top: 5px
}

body .video-responsive {
    margin: 0px;
    margin-bottom: 20px
}

.count-badge {
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 11px;
    color: rgba(255, 255, 255, 1);
    background: rgba(221, 14, 28, 1);
    border-width: 2px;
    border-style: solid;
    border-color: rgba(248, 248, 248, 1);
    border-radius: 50px
}

.count-zero {
    display: none !important
}

.product-label b {
    font-size: 11px;
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(13, 82, 214, 1);
    border-radius: 3px;
    padding: 5px;
    padding-bottom: 6px
}

.product-label.product-label-default b {
    min-width: 45px
}

.tooltip-inner {
    font-size: 12px;
    color: rgba(255, 255, 255, 1);
    background: rgba(13, 82, 214, 1);
    border-radius: 3px;
    box-shadow: 0 -10px 30px -5px rgba(0, 0, 0, 0.15)
}

.tooltip.top .tooltip-arrow {
    border-top-color: rgba(13, 82, 214, 1)
}

.tooltip.right .tooltip-arrow {
    border-right-color: rgba(13, 82, 214, 1)
}

.tooltip.bottom .tooltip-arrow {
    border-bottom-color: rgba(13, 82, 214, 1)
}

.tooltip.left .tooltip-arrow {
    border-left-color: rgba(13, 82, 214, 1)
}

table td {
    color: rgba(105, 105, 115, 1);
    background: rgba(255, 255, 255, 1);
    padding: 12px !important
}

table tbody tr:nth-child(even) td {
    background: rgba(250, 250, 250, 1)
}

table {
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important
}

table thead td {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(238, 238, 238, 1)
}

table thead td,
table thead th {
    border-width: 0 !important;
    border-top-width: 1px !important;
    border-bottom-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important
}

table tfoot td {
    background: rgba(238, 238, 238, 1)
}

table tfoot td,
table tfoot th {
    border-width: 0 !important;
    border-top-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important
}

.table-responsive {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.table-responsive>table {
    border-width: 0px !important
}

.table-responsive::-webkit-scrollbar-thumb {
    background-color: rgba(233, 102, 49, 1);
    border-radius: 5px
}

.table-responsive::-webkit-scrollbar {
    height: 1px;
    width: 1px
}

.has-error {
    color: rgba(221, 14, 28, 1) !important
}

.form-group .control-label {
    max-width: 150px;
    padding-top: 7px;
    padding-bottom: 5px;
    justify-content: flex-start
}

.has-error .form-control {
    border-style: solid !important;
    border-color: rgba(221, 14, 28, 1) !important
}

.required .control-label::after,
.required .control-label+div::before,
.text-danger {
    font-size: 17px;
    color: rgba(221, 14, 28, 1)
}

.form-group {
    margin-bottom: 8px
}

.required.has-error .control-label::after,
.required.has-error .control-label+div::before {
    color: rgba(221, 14, 28, 1) !important
}

.required .control-label::after,
.required .control-label+div::before {
    margin-top: 3px
}

input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 500px;
    height: 38px
}

input.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

input.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

textarea.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    height: 100px
}

textarea.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

textarea.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

select.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 500px
}

select.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

select.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.radio {
    width: 100%
}

.checkbox {
    width: 100%
}

.input-group .input-group-btn .btn {
    min-width: 36px;
    padding: 12px;
    min-height: 36px;
    margin-left: 5px
}

.product-option-file .btn i::before {
    content: '\ebd8' !important;
    font-family: icomoon !important
}

.stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.stepper {
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px
}

.stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.pagination-results {
    font-size: 13px;
    letter-spacing: 1px;
    margin-top: 20px;
    justify-content: flex-start
}

.pagination-results .text-right {
    display: block
}

.pagination>li>a:hover {
    color: rgba(255, 255, 255, 1)
}

.pagination>li.active>span,
.pagination>li.active>span:hover,
.pagination>li>a:focus {
    color: rgba(255, 255, 255, 1)
}

.pagination>li {
    background: rgba(248, 248, 248, 1);
    border-radius: 3px
}

.pagination>li>a,
.pagination>li>span {
    padding: 5px;
    padding-right: 6px;
    padding-left: 6px
}

.pagination>li:hover {
    background: rgba(15, 58, 141, 1)
}

.pagination>li.active {
    background: rgba(15, 58, 141, 1)
}

.pagination>li:first-child a::before,
.pagination>li:last-child a::before {
    content: '\e940' !important;
    font-family: icomoon !important
}

.pagination>li .prev::before,
.pagination>li .next::before {
    content: '\e93e' !important;
    font-family: icomoon !important
}

.pagination>li:not(:first-of-type) {
    margin-left: 5px
}

.rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.rating .fa-star,
.rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.popup-inner-body {
    max-height: calc(100vh - 50px * 2)
}

.popup-container {
    max-width: calc(100% - 20px * 2)
}

.popup-bg {
    background: rgba(0, 0, 0, 0.75)
}

.popup-body,
.popup {
    background: rgba(255, 255, 255, 1)
}

.popup-content,
.popup .site-wrapper {
    padding: 20px
}

.popup-body {
    border-radius: 3px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.popup-container .popup-close::before {
    content: '\e981' !important;
    font-family: icomoon !important;
    font-size: 18px
}

.popup-close {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    margin-top: 35px
}

.popup-container>.btn,
.popup-container>.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.popup-container>.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.popup-container>.btn:active,
.popup-container>.btn:hover:active,
.popup-container>.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.popup-container>.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.popup-container>.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .popup-container>.btn:hover {
    box-shadow: none
}

.popup-container>.btn.btn.disabled::after {
    font-size: 20px
}

.scroll-top i::before {
    border-radius: 3px;
    content: '\e5d8' !important;
    font-family: icomoon !important;
    font-size: 25px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 7px
}

.scroll-top:hover i::before {
    background: rgba(233, 102, 49, 1)
}

.scroll-top {
    left: auto;
    right: 10px;
    transform: translateX(0);
    ;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 10px
}

.journal-loading>i::before,
.ias-spinner>i::before,
.lg-outer .lg-item::after,
.btn.disabled::after {
    content: '\eb75' !important;
    font-family: icomoon !important;
    font-size: 25px
}

.journal-loading>.fa-spin,
.lg-outer .lg-item::after,
.btn.disabled::after {
    animation: fa-spin infinite linear;
    ;
    animation-duration: 1200ms
}

.btn-cart::before,
.fa-shopping-cart::before {
    content: '\e99b' !important;
    font-family: icomoon !important
}

.btn-wishlist::before {
    content: '\eb67' !important;
    font-family: icomoon !important
}

.btn-compare::before,
.compare-btn::before {
    content: '\eab6' !important;
    font-family: icomoon !important
}

.fa-refresh::before {
    content: '\f021' !important;
    font-family: icomoon !important
}

.fa-times-circle::before,
.fa-times::before,
.reset-filter::before,
.notification-close::before,
.popup-close::before,
.hn-close::before {
    content: '\e5cd' !important;
    font-family: icomoon !important
}

.p-author::before {
    content: '\eadc' !important;
    font-family: icomoon !important;
    font-size: 11px;
    margin-right: 5px
}

.p-date::before {
    content: '\f133' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.p-time::before {
    content: '\eb29' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.p-comment::before {
    content: '\f27a' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.p-view::before {
    content: '\f06e' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.p-category::before {
    content: '\f022' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.user-site::before {
    content: '\e321' !important;
    font-family: icomoon !important;
    left: -1px;
    margin-right: 5px
}

.desktop ::-webkit-scrollbar {
    width: 10px
}

.desktop ::-webkit-scrollbar-track {
    background: rgba(238, 238, 238, 1)
}

.desktop ::-webkit-scrollbar-thumb {
    background: rgba(139, 145, 152, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(238, 238, 238, 1);
    border-radius: 10px
}

.expand-content {
    max-height: 70px
}

.block-expand.btn,
.block-expand.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.block-expand.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .block-expand.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.block-expand.btn:active,
.block-expand.btn:hover:active,
.block-expand.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.block-expand.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.block-expand.btn.btn.disabled::after {
    font-size: 20px
}

.block-expand::after {
    content: 'Show More'
}

.block-expanded .block-expand::after {
    content: 'Show Less'
}

.block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.block-expanded .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.block-expand-overlay {
    background: linear-gradient(to bottom, transparent, rgba(248, 248, 248, 1))
}

.safari .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(248, 248, 248, 1))
}

.iphone .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(248, 248, 248, 1))
}

.ipad .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(248, 248, 248, 1))
}

.old-browser {
    color: rgba(68, 68, 68, 1);
    background: rgba(255, 255, 255, 1)
}

.j-loader .journal-loading>i::before {
    margin-top: -2px
}

.notification-cart.notification {
    max-width: 400px;
    margin: 20px;
    margin-bottom: 0px;
    padding: 10px;
    background: rgba(255, 255, 255, 1);
    border-radius: 7px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    color: rgba(105, 105, 115, 1)
}

.notification-cart .notification-close {
    display: block;
    width: 25px;
    height: 25px;
    margin-right: 5px;
    margin-top: 5px
}

.notification-cart .notification-close::before {
    content: '\e5cd' !important;
    font-family: icomoon !important;
    font-size: 20px
}

.notification-cart .notification-close.btn,
.notification-cart .notification-close.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.notification-cart .notification-close.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.notification-cart .notification-close.btn:active,
.notification-cart .notification-close.btn:hover:active,
.notification-cart .notification-close.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.notification-cart .notification-close.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.notification-cart .notification-close.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .notification-cart .notification-close.btn:hover {
    box-shadow: none
}

.notification-cart .notification-close.btn.btn.disabled::after {
    font-size: 20px
}

.notification-cart img {
    display: block;
    margin-right: 10px;
    margin-bottom: 10px
}

.notification-cart .notification-buttons {
    display: flex;
    padding: 10px;
    margin: -10px;
    margin-top: 5px
}

.notification-cart .notification-view-cart {
    display: inline-flex;
    flex-grow: 1
}

.notification-cart .notification-checkout {
    display: inline-flex;
    flex-grow: 1;
    margin-left: 10px
}

.notification-cart .notification-checkout::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    margin-left: 5px
}

.notification-wishlist.notification {
    max-width: 400px;
    margin: 20px;
    margin-bottom: 0px;
    padding: 10px;
    background: rgba(255, 255, 255, 1);
    border-radius: 7px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    color: rgba(105, 105, 115, 1)
}

.notification-wishlist .notification-close {
    display: block;
    width: 25px;
    height: 25px;
    margin-right: 5px;
    margin-top: 5px
}

.notification-wishlist .notification-close::before {
    content: '\e5cd' !important;
    font-family: icomoon !important;
    font-size: 20px
}

.notification-wishlist .notification-close.btn,
.notification-wishlist .notification-close.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.notification-wishlist .notification-close.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.notification-wishlist .notification-close.btn:active,
.notification-wishlist .notification-close.btn:hover:active,
.notification-wishlist .notification-close.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.notification-wishlist .notification-close.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.notification-wishlist .notification-close.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .notification-wishlist .notification-close.btn:hover {
    box-shadow: none
}

.notification-wishlist .notification-close.btn.btn.disabled::after {
    font-size: 20px
}

.notification-wishlist img {
    display: block;
    margin-right: 10px;
    margin-bottom: 10px
}

.notification-wishlist .notification-buttons {
    display: flex;
    padding: 10px;
    margin: -10px;
    margin-top: 5px
}

.notification-wishlist .notification-view-cart {
    display: inline-flex;
    flex-grow: 1
}

.notification-wishlist .notification-checkout {
    display: inline-flex;
    flex-grow: 1;
    margin-left: 10px
}

.notification-wishlist .notification-checkout::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    margin-left: 5px
}

.notification-compare.notification {
    max-width: 400px;
    margin: 20px;
    margin-bottom: 0px;
    padding: 10px;
    background: rgba(255, 255, 255, 1);
    border-radius: 7px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    color: rgba(105, 105, 115, 1)
}

.notification-compare .notification-close {
    display: block;
    width: 25px;
    height: 25px;
    margin-right: 5px;
    margin-top: 5px
}

.notification-compare .notification-close::before {
    content: '\e5cd' !important;
    font-family: icomoon !important;
    font-size: 20px
}

.notification-compare .notification-close.btn,
.notification-compare .notification-close.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.notification-compare .notification-close.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.notification-compare .notification-close.btn:active,
.notification-compare .notification-close.btn:hover:active,
.notification-compare .notification-close.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.notification-compare .notification-close.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.notification-compare .notification-close.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .notification-compare .notification-close.btn:hover {
    box-shadow: none
}

.notification-compare .notification-close.btn.btn.disabled::after {
    font-size: 20px
}

.notification-compare img {
    display: block;
    margin-right: 10px;
    margin-bottom: 10px
}

.notification-compare .notification-buttons {
    display: flex;
    padding: 10px;
    margin: -10px;
    margin-top: 5px
}

.notification-compare .notification-view-cart {
    display: inline-flex;
    flex-grow: 1
}

.notification-compare .notification-checkout {
    display: inline-flex;
    flex-grow: 1;
    margin-left: 10px
}

.notification-compare .notification-checkout::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    margin-left: 5px
}

.popup-quickview .popup-inner-body {
    max-height: calc(100vh - 50px * 2);
    height: 525px
}

.popup-quickview .popup-container {
    max-width: calc(100% - 20px * 2);
    width: 700px
}

.popup-quickview.popup-bg {
    background: rgba(0, 0, 0, 0.75)
}

.popup-quickview.popup-body,
.popup-quickview.popup {
    background: rgba(255, 255, 255, 1)
}

.popup-quickview.popup-content,
.popup-quickview.popup .site-wrapper {
    padding: 20px
}

.popup-quickview.popup-body {
    border-radius: 3px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.popup-quickview.popup-container .popup-close::before {
    content: '\e981' !important;
    font-family: icomoon !important;
    font-size: 18px
}

.popup-quickview.popup-close {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    margin-top: 35px
}

.popup-quickview.popup-container>.btn,
.popup-quickview.popup-container>.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.popup-quickview.popup-container>.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.popup-quickview.popup-container>.btn:active,
.popup-quickview.popup-container>.btn:hover:active,
.popup-quickview.popup-container>.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.popup-quickview.popup-container>.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.popup-quickview.popup-container>.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .popup-quickview.popup-container>.btn:hover {
    box-shadow: none
}

.popup-quickview.popup-container>.btn.btn.disabled::after {
    font-size: 20px
}

.route-product-product.popup-quickview .product-info .product-left {
    width: 50%
}

.route-product-product.popup-quickview .product-info .product-right {
    width: calc(100% - 50%);
    padding-left: 20px
}

.route-product-product.popup-quickview h1.page-title {
    display: none
}

.route-product-product.popup-quickview div.page-title {
    display: block
}

.route-product-product.popup-quickview .page-title {
    font-size: 22px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.route-product-product.popup-quickview .product-image .main-image {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.route-product-product.popup-quickview .direction-horizontal .additional-image {
    width: calc(100% / 4)
}

.route-product-product.popup-quickview .additional-images .swiper-container {
    overflow: hidden
}

.route-product-product.popup-quickview .additional-images .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.route-product-product.popup-quickview .additional-images:hover .swiper-buttons {
    display: block
}

.route-product-product.popup-quickview .additional-images .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.route-product-product.popup-quickview .additional-images .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.route-product-product.popup-quickview .additional-images .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.route-product-product.popup-quickview .additional-images .swiper-button-disabled {
    opacity: 0
}

.route-product-product.popup-quickview .additional-images .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.route-product-product.popup-quickview .additional-images .swiper {
    padding-bottom: 15px
}

.route-product-product.popup-quickview .additional-images .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .route-product-product.popup-quickview .additional-images .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.route-product-product.popup-quickview .additional-images .swiper-pagination>span {
    border-radius: 50px
}

.route-product-product.popup-quickview .additional-image {
    padding: calc(10px / 2)
}

.route-product-product.popup-quickview .additional-images {
    margin-top: 10px;
    margin-right: -5px;
    margin-left: -5px
}

.route-product-product.popup-quickview .additional-images img {
    border-width: 1px;
    border-style: solid;
    border-radius: 3px
}

.route-product-product.popup-quickview .product-info .product-stats li::before {
    content: '\f111' !important;
    font-family: icomoon !important
}

.route-product-product.popup-quickview .product-info .product-stats ul {
    width: 100%
}

.route-product-product.popup-quickview .product-stats .product-views::before {
    content: '\f06e' !important;
    font-family: icomoon !important
}

.route-product-product.popup-quickview .product-stats .product-sold::before {
    content: '\e263' !important;
    font-family: icomoon !important
}

.route-product-product.popup-quickview .product-info .custom-stats {
    justify-content: space-between
}

.route-product-product.popup-quickview .product-info .product-details .rating {
    justify-content: flex-start
}

.route-product-product.popup-quickview .product-info .product-details .countdown-wrapper {
    display: block
}

.route-product-product.popup-quickview .product-info .product-details .product-price-group {
    text-align: left;
    padding-top: 15px;
    margin-top: -5px;
    display: flex
}

.route-product-product.popup-quickview .product-info .product-details .price-group {
    justify-content: flex-start;
    flex-direction: row;
    align-items: center
}

.route-product-product.popup-quickview .product-info .product-details .product-price-new {
    order: -1
}

.route-product-product.popup-quickview .product-info .product-details .product-price-old {
    margin-left: 10px
}

.route-product-product.popup-quickview .product-info .product-details .product-points {
    display: block
}

.route-product-product.popup-quickview .product-info .product-details .product-tax {
    display: block
}

.route-product-product.popup-quickview .product-info .product-details .discounts {
    display: block
}

.route-product-product.popup-quickview .product-info .product-details .product-options {
    background: rgba(237, 242, 254, 1);
    padding: 15px;
    padding-top: 5px
}

.route-product-product.popup-quickview .product-info .product-details .product-options>.options-title {
    display: none
}

.route-product-product.popup-quickview .product-info .product-details .product-options>h3 {
    display: block
}

.route-product-product.popup-quickview .product-info .product-options .push-option>div input:checked+img {
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.7)
}

.route-product-product.popup-quickview .product-info .product-details .button-group-page {
    position: fixed;
    width: 100%;
    z-index: 1000;
    ;
    background: rgba(240, 242, 245, 1);
    padding: 10px;
    margin: 0px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.route-product-product.popup-quickview {
    padding-bottom: 60px !important
}

.route-product-product.popup-quickview .site-wrapper {
    padding-bottom: 0 !important
}

.route-product-product.popup-quickview.mobile .product-info .product-right {
    padding-bottom: 60px !important
}

.route-product-product.popup-quickview .product-info .button-group-page .stepper {
    display: flex;
    height: 43px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-cart {
    display: inline-flex;
    margin-right: 7px;
    margin-left: 7px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-cart::before,
.route-product-product.popup-quickview .product-info .button-group-page .btn-cart .btn-text {
    display: inline-block
}

.route-product-product.popup-quickview .product-info .product-details .stepper-group {
    flex-grow: 1
}

.route-product-product.popup-quickview .product-info .product-details .stepper-group .btn-cart {
    flex-grow: 1
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-cart::before {
    font-size: 17px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details {
    display: inline-flex;
    flex-grow: 0
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details .btn-text {
    display: none
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    font-size: 18px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn {
    background: rgba(80, 173, 85, 1)
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn.btn.disabled::after {
    font-size: 20px
}

.route-product-product.popup-quickview .product-info .product-details .button-group-page .wishlist-compare {
    flex-grow: 0 !important;
    margin: 0px !important
}

.route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare {
    margin-left: auto
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist {
    display: inline-flex;
    margin: 0px;
    margin-right: 7px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist .btn-text {
    display: none
}

.route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare .btn-wishlist {
    width: auto !important
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist::before {
    font-size: 17px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn {
    background: rgba(221, 14, 28, 1)
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare {
    display: inline-flex;
    margin-right: 7px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare .btn-text {
    display: none
}

.route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare .btn-compare {
    width: auto !important
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare::before {
    font-size: 17px
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn,
.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:active,
.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:hover:active,
.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.popup-quickview .product-right .description {
    order: -1
}

.popup-quickview .expand-content {
    overflow: hidden
}

.popup-quickview .block-expand-overlay {
    background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 1))
}

.safari.popup-quickview .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
}

.iphone.popup-quickview .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
}

.ipad.popup-quickview .block-expand-overlay {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
}

.login-box .title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.login-box .title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.login-box .title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.login-box .title::after,
.login-box .title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.login-box {
    flex-direction: row
}

.login-box .well {
    margin-right: 30px
}

.popup-login .popup-container {
    width: 500px
}

.popup-login .popup-inner-body {
    height: 275px
}

.popup-register .popup-container {
    width: 500px
}

.popup-register .popup-inner-body {
    height: 620px
}

.login-box>div:first-of-type {
    margin-right: 30px
}

.account-list>li>a {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    flex-direction: column;
    width: 100%;
    text-align: center
}

.desktop .account-list>li>a:hover {
    color: rgba(15, 58, 141, 1);
    background: rgba(255, 255, 255, 1)
}

.account-list>li>a::before {
    content: '\e93f' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(105, 105, 115, 1);
    margin: 0
}

.account-list .edit-info {
    display: flex
}

.route-information-sitemap .site-edit {
    display: block
}

.account-list .edit-pass {
    display: flex
}

.route-information-sitemap .site-pass {
    display: block
}

.account-list .edit-address {
    display: flex
}

.route-information-sitemap .site-address {
    display: block
}

.account-list .edit-wishlist {
    display: flex
}

.my-cards {
    display: block
}

.account-list .edit-order {
    display: flex
}

.route-information-sitemap .site-history {
    display: block
}

.account-list .edit-downloads {
    display: flex
}

.route-information-sitemap .site-download {
    display: block
}

.account-list .edit-rewards {
    display: flex
}

.account-list .edit-returns {
    display: flex
}

.account-list .edit-transactions {
    display: flex
}

.account-list .edit-recurring {
    display: flex
}

.my-affiliates {
    display: block
}

.my-newsletter .account-list {
    display: flex
}

.my-affiliates .title {
    display: block
}

.my-newsletter .title {
    display: block
}

.my-account .title {
    display: none
}

.my-orders .title {
    display: block
}

.my-cards .title {
    display: block
}

.account-page .title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.account-page .title::after {
    display: none
}

.account-page .title.page-title>span::after {
    display: none
}

.account-list>li>a:hover {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.account-list>li {
    width: calc(100% / 5);
    padding: 10px;
    margin: 0
}

.account-list {
    margin: 0 -10px -10px;
    flex-direction: row
}

.account-list>.edit-info>a::before {
    content: '\e90d' !important;
    font-family: icomoon !important
}

.account-list>.edit-pass>a::before {
    content: '\eac4' !important;
    font-family: icomoon !important
}

.account-list>.edit-address>a::before {
    content: '\e956' !important;
    font-family: icomoon !important
}

.account-list>.edit-wishlist>a::before {
    content: '\e955' !important;
    font-family: icomoon !important
}

.my-cards .account-list>li>a::before {
    content: '\e950' !important;
    font-family: icomoon !important
}

.account-list>.edit-order>a::before {
    content: '\ead5' !important;
    font-family: icomoon !important
}

.account-list>.edit-downloads>a::before {
    content: '\eb4e' !important;
    font-family: icomoon !important
}

.account-list>.edit-rewards>a::before {
    content: '\e952' !important;
    font-family: icomoon !important
}

.account-list>.edit-returns>a::before {
    content: '\f112' !important;
    font-family: icomoon !important
}

.account-list>.edit-transactions>a::before {
    content: '\e928' !important;
    font-family: icomoon !important
}

.account-list>.edit-recurring>a::before {
    content: '\e8b3' !important;
    font-family: icomoon !important
}

.account-list>.affiliate-add>a::before {
    content: '\e95a' !important;
    font-family: icomoon !important
}

.account-list>.affiliate-edit>a::before {
    content: '\e95a' !important;
    font-family: icomoon !important
}

.account-list>.affiliate-track>a::before {
    content: '\e93c' !important;
    font-family: icomoon !important
}

.my-newsletter .account-list>li>a::before {
    content: '\e94c' !important;
    font-family: icomoon !important
}

.route-account-register .account-customer-group label::after {
    display: none !important
}

#account .account-fax label::after {
    display: none !important
}

.route-account-register .address-company label::after {
    display: none !important
}

#account-address .address-company label::after {
    display: none !important
}

.route-account-register .address-address-2 label::after {
    display: none !important
}

#account-address .address-address-2 label::after {
    display: none !important
}

.route-checkout-cart .td-qty .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.route-checkout-cart .td-qty .stepper {
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px
}

.route-checkout-cart .td-qty .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.route-checkout-cart .td-qty .btn-update.btn,
.route-checkout-cart .td-qty .btn-update.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.route-checkout-cart .td-qty .btn-update.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.route-checkout-cart .td-qty .btn-update.btn:active,
.route-checkout-cart .td-qty .btn-update.btn:hover:active,
.route-checkout-cart .td-qty .btn-update.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .td-qty .btn-update.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .td-qty .btn-update.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .route-checkout-cart .td-qty .btn-update.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .td-qty .btn-update.btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .td-qty .btn-remove.btn {
    background: rgba(221, 14, 28, 1)
}

.route-checkout-cart .td-qty .btn-remove.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.route-checkout-cart .td-qty .btn-remove.btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .cart-page {
    display: flex
}

.route-checkout-cart .cart-bottom {
    max-width: 400px
}

.cart-bottom {
    background: rgba(238, 238, 238, 1);
    padding: 20px;
    margin-left: 20px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.panels-total {
    flex-direction: column
}

.panels-total .cart-total {
    margin-top: 20px;
    align-items: flex-start
}

.route-checkout-cart .buttons .pull-right .btn {
    background: rgba(80, 173, 85, 1)
}

.route-checkout-cart .buttons .pull-right .btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.route-checkout-cart .buttons .pull-right .btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .buttons .pull-left .btn {
    background: rgba(13, 82, 214, 1)
}

.route-checkout-cart .buttons .pull-left .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.route-checkout-cart .buttons .pull-left .btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .buttons>div {
    flex: 1;
    width: auto;
    flex-basis: 0
}

.route-checkout-cart .buttons>div .btn {
    width: 100%
}

.route-checkout-cart .buttons .pull-left {
    margin-right: 0
}

.route-checkout-cart .buttons>div+div {
    padding-left: 10px
}

.route-checkout-cart .buttons .pull-right:only-child {
    flex: 1
}

.route-checkout-cart .buttons .pull-right:only-child .btn {
    width: 100%
}

.route-checkout-cart .buttons input+.btn {
    margin-top: 5px
}

.cart-table .td-image {
    display: table-cell
}

.cart-table .td-qty .stepper,
.cart-section .stepper,
.cart-table .td-qty .btn-update.btn,
.cart-section .td-qty .btn-primary.btn {
    display: inline-flex
}

.cart-table .td-name {
    display: table-cell
}

.cart-table .td-model {
    display: table-cell
}

.route-account-order-info .table-responsive .table-order thead>tr>td:nth-child(2) {
    display: table-cell
}

.route-account-order-info .table-responsive .table-order tbody>tr>td:nth-child(2) {
    display: table-cell
}

.route-account-order-info .table-responsive .table-order tfoot>tr>td:last-child {
    display: table-cell
}

.cart-table .td-price {
    display: table-cell
}

.route-checkout-cart .cart-panels .form-group .control-label {
    max-width: 9999px;
    padding-top: 7px;
    padding-bottom: 5px;
    justify-content: flex-start
}

.route-checkout-cart .cart-panels .form-group {
    margin-bottom: 6px
}

.route-checkout-cart .cart-panels input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important
}

.route-checkout-cart .cart-panels input.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.route-checkout-cart .cart-panels input.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels textarea.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important
}

.route-checkout-cart .cart-panels textarea.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.route-checkout-cart .cart-panels textarea.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels select.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 200px
}

.route-checkout-cart .cart-panels select.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.route-checkout-cart .cart-panels select.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .radio {
    width: 100%
}

.route-checkout-cart .cart-panels .checkbox {
    width: 100%
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn,
.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:active,
.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:hover:active,
.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important;
    min-width: 35px;
    min-height: 35px;
    margin-left: 5px
}

.desktop .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .input-group .input-group-btn .btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .cart-panels .product-option-file .btn i::before {
    content: '\ebd8' !important;
    font-family: icomoon !important
}

.route-checkout-cart .cart-panels .buttons {
    margin-top: 20px;
    font-size: 12px
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn,
.route-checkout-cart .cart-panels .buttons .pull-right .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn:active,
.route-checkout-cart .cart-panels .buttons .pull-right .btn:hover:active,
.route-checkout-cart .cart-panels .buttons .pull-right .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .route-checkout-cart .cart-panels .buttons .pull-right .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-checkout-cart .cart-panels .buttons .pull-right .btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .cart-panels .buttons .pull-left .btn {
    background: rgba(13, 82, 214, 1)
}

.route-checkout-cart .cart-panels .buttons .pull-left .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.route-checkout-cart .cart-panels .buttons .pull-left .btn.btn.disabled::after {
    font-size: 20px
}

.route-checkout-cart .cart-panels .buttons>div {
    flex: 1;
    width: auto;
    flex-basis: 0
}

.route-checkout-cart .cart-panels .buttons>div .btn {
    width: 100%
}

.route-checkout-cart .cart-panels .buttons .pull-left {
    margin-right: 0
}

.route-checkout-cart .cart-panels .buttons>div+div {
    padding-left: 20px
}

.route-checkout-cart .cart-panels .buttons .pull-right:only-child {
    flex: 1;
    margin: 0 0 0 auto
}

.route-checkout-cart .cart-panels .buttons .pull-right:only-child .btn {
    width: 100%
}

.route-checkout-cart .cart-panels .buttons input+.btn {
    margin-top: 5px
}

.route-checkout-cart .cart-panels .buttons input[type=checkbox] {
    margin-right: 7px !important;
    margin-left: 3px !important
}

.route-checkout-cart .cart-panels .title {
    display: block
}

.route-checkout-cart .cart-panels>p {
    display: none
}

.route-checkout-cart .cart-panels .panel-reward {
    display: block
}

.route-checkout-cart .cart-panels .panel-coupon {
    display: block
}

.route-checkout-cart .cart-panels .panel-shipping {
    display: block
}

.route-checkout-cart .cart-panels .panel-voucher {
    display: block
}

.route-checkout-cart .cart-panels .panel-reward .collapse {
    display: none
}

.route-checkout-cart .cart-panels .panel-reward .collapse.in {
    display: block
}

.route-checkout-cart .cart-panels .panel-reward .panel-heading {
    pointer-events: auto
}

.route-checkout-cart .cart-panels .panel-coupon .collapse {
    display: none
}

.route-checkout-cart .cart-panels .panel-coupon .collapse.in {
    display: block
}

.route-checkout-cart .cart-panels .panel-coupon .panel-heading {
    pointer-events: auto
}

.route-checkout-cart .cart-panels .panel-shipping .collapse {
    display: none
}

.route-checkout-cart .cart-panels .panel-shipping .collapse.in {
    display: block
}

.route-checkout-cart .cart-panels .panel-shipping .panel-heading {
    pointer-events: auto
}

.route-checkout-cart .cart-panels .panel-voucher .collapse {
    display: none
}

.route-checkout-cart .cart-panels .panel-voucher .collapse.in {
    display: block
}

.route-checkout-cart .cart-panels .panel-voucher .panel-heading {
    pointer-events: auto
}

.route-product-category .page-title {
    display: block
}

.route-product-category .category-description {
    order: 0
}

.category-image {
    float: none
}

.category-text {
    position: static;
    bottom: auto
}

.refine-categories .refine-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 8 * 20px) / 9 - 0.01px)
}

.refine-categories .refine-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 9 - 0.01px)
}

.one-column #content .refine-categories .refine-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 6 * 20px) / 7 - 0.01px)
}

.one-column #content .refine-categories .refine-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 7 - 0.01px)
}

.two-column #content .refine-categories .refine-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 4 * 20px) / 5 - 0.01px)
}

.two-column #content .refine-categories .refine-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 5 - 0.01px)
}

.side-column .refine-categories .refine-item.swiper-slide {
    margin-right: 10px;
    width: calc((100% - 2 * 10px) / 3 - 0.01px)
}

.side-column .refine-categories .refine-item:not(.swiper-slide) {
    padding: 5px;
    width: calc(100% / 3 - 0.01px)
}

.refine-items {
    margin: -5px
}

.refine-categories .swiper-container {
    padding-top: 10px;
    padding-bottom: 30px;
    overflow: hidden
}

.refine-links .refine-item+.refine-item {
    margin-left: 10px
}

.refine-categories .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.refine-categories:hover .swiper-buttons {
    display: block
}

.refine-categories .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.refine-categories .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.refine-categories .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.refine-categories .swiper-button-disabled {
    opacity: 0
}

.refine-categories .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.refine-categories .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.refine-categories .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.refine-categories .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.refine-categories .swiper {
    padding-bottom: 15px
}

.refine-categories .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.refine-categories .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .refine-categories .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.refine-categories .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.refine-categories .swiper-pagination>span {
    border-radius: 50px
}

.refine-item a {
    background: rgba(255, 255, 255, 1);
    padding: 7px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 7px
}

.refine-item a:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.refine-item a img {
    display: block
}

.refine-name {
    white-space: normal;
    overflow: visible;
    text-overflow: initial;
    padding: 7px;
    padding-bottom: 0px
}

.refine-item .refine-name {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-align: center
}

.refine-item a:hover .refine-name {
    color: rgba(233, 102, 49, 1)
}

.refine-name .count-badge {
    display: none
}

.checkout-section.section-login {
    display: block
}

.quick-checkout-wrapper .has-error {
    color: rgba(221, 14, 28, 1) !important
}

.quick-checkout-wrapper .form-group .control-label {
    max-width: 150px;
    padding-top: 7px;
    padding-bottom: 5px;
    justify-content: flex-start
}

.quick-checkout-wrapper legend {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.quick-checkout-wrapper legend::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.quick-checkout-wrapper legend.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.quick-checkout-wrapper legend::after,
.quick-checkout-wrapper legend.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.quick-checkout-wrapper .has-error .form-control {
    border-style: solid !important;
    border-color: rgba(221, 14, 28, 1) !important
}

.quick-checkout-wrapper .required .control-label::after,
.quick-checkout-wrapper .required .control-label+div::before,
.quick-checkout-wrapper .text-danger {
    font-size: 17px;
    color: rgba(221, 14, 28, 1)
}

.quick-checkout-wrapper .form-group {
    margin-bottom: 8px
}

.quick-checkout-wrapper .required.has-error .control-label::after,
.quick-checkout-wrapper .required.has-error .control-label+div::before {
    color: rgba(221, 14, 28, 1) !important
}

.quick-checkout-wrapper .required .control-label::after,
.quick-checkout-wrapper .required .control-label+div::before {
    margin-top: 3px
}

.quick-checkout-wrapper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 500px;
    height: 38px
}

.quick-checkout-wrapper input.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.quick-checkout-wrapper input.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper textarea.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    height: 100px
}

.quick-checkout-wrapper textarea.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.quick-checkout-wrapper textarea.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper select.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 500px
}

.quick-checkout-wrapper select.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.quick-checkout-wrapper select.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper .radio {
    width: 100%
}

.quick-checkout-wrapper .checkbox {
    width: 100%
}

.quick-checkout-wrapper .input-group .input-group-btn .btn {
    min-width: 36px;
    padding: 12px;
    min-height: 36px;
    margin-left: 5px
}

.quick-checkout-wrapper .product-option-file .btn i::before {
    content: '\ebd8' !important;
    font-family: icomoon !important
}

.quick-checkout-wrapper div .title.section-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.quick-checkout-wrapper div .title.section-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.quick-checkout-wrapper div .title.section-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.quick-checkout-wrapper div .title.section-title::after,
.quick-checkout-wrapper div .title.section-title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.checkout-section {
    background: rgba(255, 255, 255, 1);
    padding: 15px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    margin-bottom: 25px
}

.quick-checkout-wrapper>div .right {
    padding-left: 25px;
    width: calc(100% - 30%)
}

.quick-checkout-wrapper>div .left {
    width: 30%
}

.section-payment {
    padding-left: 20px;
    width: calc(100% - 40%);
    display: block
}

.section-shipping {
    width: 40%;
    display: block
}

.quick-checkout-wrapper .right .section-cvr {
    display: block
}

.quick-checkout-wrapper .right .section-cvr .control-label {
    display: flex
}

.quick-checkout-wrapper .right .section-cvr .form-coupon {
    display: flex
}

.quick-checkout-wrapper .right .section-cvr .form-voucher {
    display: flex
}

.quick-checkout-wrapper .right .section-cvr .form-reward {
    display: flex
}

.quick-checkout-wrapper .right .checkout-payment-details legend {
    display: block
}

.quick-checkout-wrapper .right .confirm-section .buttons {
    margin-top: 20px;
    font-size: 12px
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn,
.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:active,
.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:hover:active,
.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn.btn.disabled::after {
    font-size: 20px
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn {
    background: rgba(13, 82, 214, 1)
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn.btn.disabled::after {
    font-size: 20px
}

.quick-checkout-wrapper .right .confirm-section .buttons>div {
    flex: 1;
    width: auto;
    flex-basis: 0
}

.quick-checkout-wrapper .right .confirm-section .buttons>div .btn {
    width: 100%
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-left {
    margin-right: 0
}

.quick-checkout-wrapper .right .confirm-section .buttons>div+div {
    padding-left: 20px
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right:only-child {
    flex: 1;
    margin: 0 0 0 auto
}

.quick-checkout-wrapper .right .confirm-section .buttons .pull-right:only-child .btn {
    width: 100%
}

.quick-checkout-wrapper .right .confirm-section .buttons input+.btn {
    margin-top: 5px
}

.quick-checkout-wrapper .right .confirm-section .buttons input[type=checkbox] {
    margin-right: 7px !important;
    margin-left: 3px !important
}

.quick-checkout-wrapper .confirm-section textarea {
    display: block
}

.quick-checkout-wrapper .section-comments label::after {
    display: none !important
}

.quick-checkout-wrapper .left .section-login .title {
    display: block
}

.quick-checkout-wrapper .left .section-register .title {
    display: block
}

.quick-checkout-wrapper .left .payment-address .title {
    display: block
}

.quick-checkout-wrapper .left .shipping-address .title {
    display: block
}

.quick-checkout-wrapper .right .shipping-payment .title {
    display: block
}

.quick-checkout-wrapper .right .section-cvr .title {
    display: block
}

.quick-checkout-wrapper .right .checkout-payment-details .title {
    display: block
}

.quick-checkout-wrapper .right .confirm-section .title {
    display: block
}

.quick-checkout-wrapper .account-customer-group label::after {
    display: none !important
}

.quick-checkout-wrapper .account-telephone label::after {
    display: none !important
}

.quick-checkout-wrapper .account-fax label::after {
    display: none !important
}

.quick-checkout-wrapper .address-company label::after {
    display: none !important
}

.quick-checkout-wrapper .address-address-2 label::after {
    display: none !important
}

.quick-checkout-wrapper .shipping-payment .shippings p {
    display: none;
    font-weight: bold
}

.quick-checkout-wrapper .shipping-payment .ship-wrapper p {
    display: none
}

.shipping-payment .section-body .radio {
    margin-bottom: 5px
}

.shipping-payment .section-body>div>div {
    padding-left: 8px
}

.section-shipping .section-body>div:first-child::before {
    content: '\eab8' !important;
    font-family: icomoon !important
}

.section-shipping .section-body>div:nth-child(2)::before {
    content: '\eab9' !important;
    font-family: icomoon !important;
    color: rgba(80, 173, 85, 1)
}

.section-payment .section-body>div:first-child::before {
    content: '\e961' !important;
    font-family: icomoon !important
}

.section-payment .section-body>div:nth-child(2)::before {
    content: '\e95f' !important;
    font-family: icomoon !important
}

.section-payment .section-body>div:nth-child(3)::before {
    content: '\f0d6' !important;
    font-family: icomoon !important
}

.route-product-compare .compare-buttons .btn-cart {
    display: flex
}

.route-product-compare .compare-buttons .btn-remove {
    display: flex
}

.compare-name {
    display: table-row
}

.compare-image {
    display: table-row
}

.compare-price {
    display: table-row
}

.compare-model {
    display: table-row
}

.compare-manufacturer {
    display: table-row
}

.compare-availability {
    display: table-row
}

.compare-rating {
    display: table-row
}

.compare-summary {
    display: table-row
}

.compare-weight {
    display: table-row
}

.compare-dimensions {
    display: table-row
}

.route-information-contact .location-title {
    display: none
}

.route-information-contact .store-image {
    display: none
}

.route-information-contact .store-address {
    display: none
}

.route-information-contact .store-tel {
    display: none
}

.route-information-contact .store-fax {
    display: none
}

.route-information-contact .store-info {
    display: none
}

.route-information-contact .store-address a {
    display: none
}

.route-information-contact .other-stores {
    display: none
}

.route-information-contact .stores-title {
    display: none !important
}

.route-information-information .content {
    column-count: initial;
    column-rule-style: none
}

.maintenance-page header {
    display: none !important
}

.maintenance-page footer {
    display: none !important
}

#common-maintenance {
    padding: 40px
}

.route-product-manufacturer #content a img {
    display: block
}

.route-product-manufacturer .manufacturer a {
    background: rgba(255, 255, 255, 1);
    padding: 8px;
    border-radius: 3px;
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.route-product-manufacturer .manufacturer a:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-product-manufacturer h2.title {
    font-size: 22px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.route-product-search #content .search-criteria-title {
    display: none
}

.route-product-search #content .buttons {
    margin-top: 20px;
    font-size: 12px
}

.route-product-search #content .buttons .pull-right .btn,
.route-product-search #content .buttons .pull-right .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.route-product-search #content .buttons .pull-right .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.route-product-search #content .buttons .pull-right .btn:active,
.route-product-search #content .buttons .pull-right .btn:hover:active,
.route-product-search #content .buttons .pull-right .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-product-search #content .buttons .pull-right .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.route-product-search #content .buttons .pull-right .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .route-product-search #content .buttons .pull-right .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.route-product-search #content .buttons .pull-right .btn.btn.disabled::after {
    font-size: 20px
}

.route-product-search #content .buttons .pull-left .btn {
    background: rgba(13, 82, 214, 1)
}

.route-product-search #content .buttons .pull-left .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.route-product-search #content .buttons .pull-left .btn.btn.disabled::after {
    font-size: 20px
}

.route-product-search #content .buttons>div {
    flex: 1;
    width: auto;
    flex-basis: 0
}

.route-product-search #content .buttons>div .btn {
    width: 100%
}

.route-product-search #content .buttons .pull-left {
    margin-right: 0
}

.route-product-search #content .buttons>div+div {
    padding-left: 20px
}

.route-product-search #content .buttons .pull-right:only-child {
    flex: 1;
    margin: 0 0 0 auto
}

.route-product-search #content .buttons .pull-right:only-child .btn {
    width: 100%
}

.route-product-search #content .buttons input+.btn {
    margin-top: 5px
}

.route-product-search #content .buttons input[type=checkbox] {
    margin-right: 7px !important;
    margin-left: 3px !important
}

.route-product-search #content .search-products-title {
    display: block
}

.route-information-sitemap #content>.row>div {
    padding: 15px;
    padding-top: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    width: auto
}

.route-information-sitemap #content>.row>div+div {
    margin-left: 20px
}

.route-information-sitemap #content>.row>div>ul>li>a::before {
    content: '\f15c' !important;
    font-family: icomoon !important
}

.route-information-sitemap #content>.row>div>ul li ul li a::before {
    content: '\f0f6' !important;
    font-family: icomoon !important
}

.route-information-sitemap #content>.row {
    flex-direction: row
}

.route-account-wishlist .td-image {
    display: table-cell
}

.route-account-wishlist .td-name {
    display: table-cell
}

.route-account-wishlist .td-model {
    display: table-cell
}

.route-account-wishlist .td-stock {
    display: table-cell
}

.route-account-wishlist .td-price {
    display: table-cell
}

.route-account-wishlist .td-stock.in-stock {
    color: rgba(80, 173, 85, 1);
    font-weight: 700
}

.route-account-wishlist .td-stock.out-of-stock {
    color: rgba(221, 14, 28, 1);
    font-weight: 700
}

.route-account-wishlist .td-price b {
    color: rgba(221, 14, 28, 1)
}

.route-account-wishlist .td-price s {
    color: rgba(105, 105, 115, 1)
}

.product-info .product-left {
    width: 50%
}

.product-info .product-right {
    width: calc(100% - 50%);
    padding-left: 40px
}

.route-product-product:not(.popup) h1.page-title {
    display: block
}

.route-product-product:not(.popup) .product-info div.page-title {
    display: none
}

.product-image .main-image {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.zm-viewer img {
    background: rgba(255, 255, 255, 1)
}

.product-image .main-image .swiper-container {
    overflow: hidden
}

.product-image .main-image .swiper-buttons {
    display: block;
    top: 50%;
    width: calc(100% - (0px * 2));
    margin-top: 0px
}

.product-image .main-image .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.product-image .main-image .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.product-image .main-image .swiper-buttons div {
    width: 40px;
    height: 40px;
    background: none;
    border-width: 0px;
    border-style: solid;
    border-color: rgba(240, 242, 245, 1)
}

.product-image .main-image .swiper-button-disabled {
    opacity: 0
}

.product-image .main-image .swiper-buttons div::before {
    content: '\e93e' !important;
    font-family: icomoon !important;
    font-size: 35px;
    color: rgba(105, 105, 115, 1)
}

.product-image .main-image .swiper-buttons .swiper-button-next::before {
    content: '\e93f' !important;
    font-family: icomoon !important;
    font-size: 35px;
    color: rgba(105, 105, 115, 1)
}

.product-image .main-image .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.product-image .main-image .swiper {
    padding-bottom: 15px
}

.product-image .main-image .swiper-pagination-bullet {
    width: 10px;
    height: 5px;
    background-color: rgba(105, 105, 115, 1)
}

.product-image .main-image .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .product-image .main-image .swiper-pagination-bullet:hover {
    background-color: rgba(221, 14, 28, 1)
}

.product-image .main-image .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(221, 14, 28, 1)
}

.product-image .main-image .swiper-pagination>span {
    border-radius: 20px
}

.product-image .swiper .swiper-controls {
    display: none
}

.lg-product-images.lg-backdrop {
    background: rgba(0, 0, 0, 0.85)
}

.lg-product-images #lg-download {
    display: none
}

.lg-product-images .lg-image {
    border-radius: 3px;
    max-height: calc(100% - 100px)
}

.lg-product-images .lg-actions .lg-prev::before {
    content: '\e93e' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(230, 230, 230, 1);
    left: -10px
}

.desktop .lg-product-images .lg-actions .lg-prev:hover::before {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-actions .lg-next::before {
    content: '\e93f' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(230, 230, 230, 1);
    left: 10px
}

.desktop .lg-product-images .lg-actions .lg-next:hover::before {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-actions .lg-icon {
    background: none
}

.lg-product-images .lg-toolbar {
    color: rgba(230, 230, 230, 1)
}

.lg-product-images #lg-counter {
    display: inline-block
}

.lg-product-images #lg-zoom-in {
    display: block
}

.lg-product-images #lg-actual-size {
    display: block
}

.lg-product-images #lg-download-in::after {
    content: '\eb4d' !important;
    font-family: icomoon !important
}

.lg-product-images #lg-zoom-in::after {
    content: '\ebef' !important;
    font-family: icomoon !important
}

.lg-product-images #lg-zoom-in:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images #lg-actual-size::after {
    content: '\ebf0' !important;
    font-family: icomoon !important
}

.lg-product-images #lg-actual-size:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-close::after {
    content: '\ebeb' !important;
    font-family: icomoon !important
}

.desktop .lg-product-images .lg-close:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-sub-html {
    font-size: 18px;
    color: rgba(230, 230, 230, 1);
    background: rgba(0, 0, 0, 0.6);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    top: auto;
    display: none
}

.lg-product-images.lg-thumb-open .lg-sub-html {
    bottom: 90px !important
}

.lg-product-images .lg-thumb-item {
    margin-top: 10px;
    padding-right: 10px
}

.lg-product-images .lg-thumb-item img {
    margin-bottom: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    border-radius: 3px
}

.lg-product-images .lg-thumb-outer {
    padding-left: 10px;
    background: rgba(17, 17, 17, 1)
}

.desktop .lg-product-images .lg-thumb-item img:hover,
.lg-product-images .lg-thumb-item.active img {
    border-color: rgba(233, 102, 49, 1)
}

.lg-product-images div.lg-thumb-item.active img {
    border-color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-toogle-thumb::after {
    color: rgba(230, 230, 230, 1)
}

.desktop .lg-product-images .lg-toogle-thumb:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-product-images .lg-toogle-thumb {
    background: rgba(17, 17, 17, 1);
    left: auto;
    right: 20px;
    transform: translateX(0)
}

.direction-horizontal .additional-image {
    width: calc(100% / 6)
}

.additional-images .swiper-container {
    overflow: hidden
}

.additional-images .swiper-buttons {
    display: block;
    top: 50%
}

.additional-images .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.additional-images .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.additional-images .swiper-buttons div {
    width: 70px;
    height: 20px;
    background: rgba(15, 58, 141, 1)
}

.additional-images .swiper-button-disabled {
    opacity: 0
}

.additional-images .swiper-buttons div::before {
    content: '\e5c4' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.additional-images .swiper-buttons .swiper-button-next::before {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.additional-images .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(13, 82, 214, 1)
}

.additional-images .swiper-pagination {
    display: none !important;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.additional-images .swiper {
    padding-bottom: 0;
    ;
    padding-bottom: 10px
}

.additional-images .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background-color: rgba(44, 54, 64, 1)
}

.additional-images .swiper-pagination>span+span {
    margin-left: 7px
}

.desktop .additional-images .swiper-pagination-bullet:hover {
    background-color: rgba(221, 14, 28, 1)
}

.additional-images .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(221, 14, 28, 1)
}

.additional-images .swiper-pagination>span {
    border-radius: 10px
}

.additional-image {
    padding: calc(10px / 2)
}

.additional-images {
    margin-top: -5px;
    margin-right: 5px
}

.additional-images img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.additional-images img:hover {
    border-color: rgba(15, 58, 141, 1)
}

.product-info .product-details>div {
    margin-bottom: 15px
}

.product-info .product-details .product-stats {
    padding-left: 25px;
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.product-info .product-stats b {
    font-size: 12px
}

.product-info .product-stats span {
    font-size: 12px
}

.product-info .product-details .brand-image a span {
    display: block
}

.product-info .product-details .brand-image a {
    padding: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.product-info .product-stats li::before {
    content: '\f111' !important;
    font-family: icomoon !important;
    font-size: 7px
}

.route-product-product:not(.popup) .product-info .product-price-group {
    flex-direction: row
}

.route-product-product:not(.popup) .product-info .product-price-group .product-stats {
    order: 2;
    margin-left: auto
}

.product-info .product-manufacturer a {
    font-size: 12px;
    text-decoration: underline
}

.product-info .product-stats .in-stock span {
    color: rgba(80, 173, 85, 1);
    font-weight: 700;
    text-transform: uppercase
}

.product-info .product-stats .out-of-stock span {
    color: rgba(221, 14, 28, 1);
    font-weight: 700;
    text-transform: uppercase
}

.product-info .product-stats .product-stock.in-stock::before {
    content: '\eb1b' !important;
    font-family: icomoon !important;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.product-info .product-stats .product-stock.out-of-stock::before {
    content: '\e14b' !important;
    font-family: icomoon !important;
    font-size: 16px;
    color: rgba(221, 14, 28, 1);
    top: -1px
}

.product-info .product-stats .product-stock b {
    display: none
}

.product-stats .product-views::before {
    content: '\f06e' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1);
    margin-right: 5px
}

.product-stats .product-sold::before {
    content: '\e99a' !important;
    font-family: icomoon !important;
    color: rgba(233, 102, 49, 1);
    margin-right: 5px
}

.product-info .product-details .custom-stats {
    order: initial;
    margin-bottom: 10px
}

.product-info .product-stats .product-sold b {
    font-weight: 700
}

.product-info .product-stats .product-views b {
    font-weight: 700
}

.product-info .custom-stats {
    justify-content: flex-start
}

.product-info .product-details .rating {
    justify-content: flex-start;
    display: flex;
    padding-top: 10px;
    padding-bottom: 25px;
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.product-info .product-details .rating div a,
.product-info .product-details .rating div b {
    font-size: 14px
}

.product-info .product-details .rating .fa-stack {
    font-size: 15px;
    width: 1.2em
}

.product-info .product-details .rating .fa-star,
.product-info .product-details .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.product-info .product-details .rating .fa-star-o:only-child {
    color: rgba(105, 105, 115, 1)
}

.product-info .product-details .countdown-wrapper {
    display: none
}

.product-info .product-details .countdown-wrapper .countdown {
    width: 100%
}

.product-info .product-details .countdown {
    font-family: 'Montserrat';
    font-weight: 400;
    font-size: 15px;
    color: rgba(51, 51, 51, 1);
    background: rgba(240, 242, 245, 1);
    border-radius: 3px;
    width: 90%
}

.product-info .product-details .countdown div span {
    color: rgba(105, 105, 115, 1)
}

.product-info .product-details .countdown>div {
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.product-info .product-details .product-price-group {
    text-align: left;
    justify-content: flex-start;
    display: flex
}

.product-info .product-details .price-group {
    font-size: 30px;
    font-weight: 700;
    line-height: 1
}

.product-info .product-details .price-group .product-price-new {
    color: rgba(221, 14, 28, 1)
}

.route-product-product:not(.popup) .product-info .product-details .price-group {
    padding-right: 20px;
    flex-direction: column;
    align-items: flex-start
}

.route-product-product:not(.popup) .product-info .product-details .product-price-new {
    order: 2
}

.product-info .product-details .price-group .product-price-old {
    display: block;
    font-size: 22px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    line-height: 1
}

.route-product-product:not(.popup) .product-info .product-details .product-price-old {
    margin-bottom: 7px
}

.product-info .product-details .product-points {
    color: rgba(105, 105, 115, 1);
    display: block;
    padding-right: 20px;
    margin-top: 5px;
    margin-bottom: 5px
}

.product-info .product-details .product-tax {
    display: block;
    color: rgba(105, 105, 115, 1);
    margin-top: 5px
}

.product-info .product-details .discounts {
    display: block
}

.product-info .product-details .product-discount {
    color: rgba(105, 105, 115, 1)
}

.route-product-product:not(.popup) .product-info .product-details .product-options {
    padding-top: 5px;
    padding-bottom: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.route-product-product:not(.popup) .product-info .product-details .product-options>.options-title {
    display: none
}

.product-info .product-details .product-options>h3 {
    display: block;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.product-info .product-details .product-options>h3::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.product-info .product-details .product-options>h3.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.product-info .product-details .product-options>h3::after,
.product-info .product-details .product-options>h3.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.product-options .form-group .control-label {
    max-width: 9999px;
    padding-top: 7px;
    padding-bottom: 5px;
    justify-content: flex-start
}

.product-options .form-group {
    margin-bottom: 6px
}

.product-options input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important
}

.product-options input.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.product-options input.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-options textarea.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important
}

.product-options textarea.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.product-options textarea.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-options select.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 1px !important;
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    border-radius: 3px !important;
    max-width: 200px
}

.product-options select.form-control:hover {
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.product-options select.form-control:focus {
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-options .radio {
    width: 100%
}

.product-options .checkbox {
    width: 100%
}

.product-options .input-group .input-group-btn .btn,
.product-options .input-group .input-group-btn .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.product-options .input-group .input-group-btn .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.product-options .input-group .input-group-btn .btn:active,
.product-options .input-group .input-group-btn .btn:hover:active,
.product-options .input-group .input-group-btn .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-options .input-group .input-group-btn .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-options .input-group .input-group-btn .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important;
    min-width: 35px;
    min-height: 35px;
    margin-left: 5px
}

.desktop .product-options .input-group .input-group-btn .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.product-options .input-group .input-group-btn .btn.btn.disabled::after {
    font-size: 20px
}

.product-options .product-option-file .btn i::before {
    content: '\ebd8' !important;
    font-family: icomoon !important
}

.product-info .product-options .push-option>div .option-value {
    margin-right: 8px;
    margin-bottom: 8px;
    min-width: 30px;
    min-height: 30px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 2px
}

.product-info .product-options .push-option>div label {
    margin-right: 5px;
    margin-bottom: 5px
}

.product-info .product-options .push-option>div .option-value:hover,
.product-info .product-options .push-option>div input:checked+.option-value {
    background: rgba(240, 242, 245, 1);
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.product-info .product-options .push-option>div input:checked+.option-value {
    background: rgba(240, 242, 245, 1);
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.product-info .product-options .push-option>div img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(139, 145, 152, 1);
    border-radius: 50%
}

.desktop .product-info .product-options .push-option>div img:hover,
.product-info .product-options .push-option>div input:checked+img {
    border-color: rgba(0, 0, 0, 1)
}

.product-info .product-options .push-option>div input:checked+img {
    border-color: rgba(0, 0, 0, 1);
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.7)
}

.product-info .product-options .push-option>div img:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.product-info .product-options .push-option input+img+.option-value {
    display: none;
    margin-left: -2px;
    font-size: 9px
}

.route-product-product:not(.popup) .product-info .product-details .button-group-page {
    position: static;
    width: auto;
    z-index: 1
}

.has-bottom-menu.route-product-product .bottom-menu {
    display: block
}

.product-info .product-details .stepper .control-label {
    display: none
}

.product-info .button-group-page .stepper {
    display: flex
}

.route-product-product:not(.popup) .product-info .button-group-page .stepper {
    height: 45px;
    margin-right: 10px
}

.product-info .button-group-page .btn-cart {
    display: inline-flex
}

.route-product-product .tags {
    display: flex;
    justify-content: flex-start;
    margin: 0px
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-cart::before {
    display: inline-block
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-cart .btn-text {
    display: inline-block
}

.product-info .button-group-page .extra-group {
    width: auto;
    flex-grow: initial;
    flex-direction: row;
    display: flex;
    margin-left: 10px
}

.product-info .button-group-page .btn-extra {
    flex: initial;
    width: auto
}

.product-info .button-group-page .btn-extra+.btn-extra {
    flex: initial;
    width: auto
}

.product-info .product-details .buttons-wrapper .extra-group {
    justify-content: flex-start;
    align-items: flex-start
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-cart {
    flex-grow: 1;
    height: 45px
}

.route-product-product:not(.popup) .product-info .button-group-page .stepper-group {
    flex-grow: 1;
    width: 100%
}

.product-info .button-group-page .btn-cart::before {
    font-size: 17px;
    margin-right: 5px
}

.product-info .button-group-page .btn-extra.btn {
    background: rgba(80, 173, 85, 1)
}

.product-info .button-group-page .btn-extra.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.product-info .button-group-page .btn-extra.btn.btn.disabled::after {
    font-size: 20px
}

.product-info .button-group-page .btn-extra+.btn-extra.btn {
    background: rgba(221, 14, 28, 1)
}

.product-info .button-group-page .btn-extra+.btn-extra.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.product-info .button-group-page .btn-extra+.btn-extra.btn.btn.disabled::after {
    font-size: 20px
}

.product-info .button-group-page .extra-group .btn:first-child::before {
    display: inline-block
}

.product-info .button-group-page .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.product-info .button-group-page .btn-extra+.btn .btn-text {
    display: none
}

.product-info .button-group-page .btn-extra+.btn::before {
    display: inline-block
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-extra {
    height: 45px
}

.product-info .button-group-page .extra-group .btn-extra+.btn-extra {
    margin-left: 10px
}

.product-info .button-group-page .extra-group .btn-extra:first-child::before {
    font-size: 17px;
    margin-right: 5px
}

.product-info .button-group-page .extra-group .btn-extra:last-child::before {
    font-size: 20px
}

.route-product-product:not(.popup) .product-info .product-details .button-group-page .wishlist-compare {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    width: 100%;
    padding-top: 10px;
    margin-top: 15px
}

.route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare {
    margin-left: auto;
    margin-right: 0;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: row
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist {
    display: inline-flex;
    margin-right: 10px
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist::before,
.product-info .button-group-page .btn-wishlist .btn-text {
    display: inline-block
}

.route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-wishlist {
    flex: initial;
    width: auto
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist::before {
    font-size: 17px;
    color: rgba(221, 14, 28, 1);
    margin-right: 5px
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn,
.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:active,
.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:hover:active,
.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:hover {
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.product-info .button-group-page .btn-compare {
    display: inline-flex
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare::before,
.product-info .button-group-page .btn-compare .btn-text {
    display: inline-block
}

.route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-compare {
    flex: initial;
    width: auto
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare::before {
    font-size: 17px;
    color: rgba(15, 58, 141, 1);
    margin-right: 5px
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn,
.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:active,
.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:hover:active,
.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:hover {
    box-shadow: none
}

.route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.product_tabs .nav-tabs>li>a,
.product_tabs .nav-tabs>li.active>a,
.product_tabs .nav-tabs>li.active>a:hover,
.product_tabs .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .product_tabs .nav-tabs>li:hover>a,
.product_tabs .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.product_tabs .nav-tabs>li.active>a,
.product_tabs .nav-tabs>li.active>a:hover,
.product_tabs .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.product_tabs .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.product_tabs .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.product_tabs .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.product_tabs .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.product_tabs .nav-tabs>li>a::before {
    font-size: 18px
}

.product_tabs .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.product_tabs .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.product_tabs .mobile .nav-tabs {
    overflow-x: scroll
}

.product_tabs .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.product_tabs .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.product_tabs .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.product_tabs .tab-container::before {
    display: none
}

.product_tabs .tab-content {
    padding-top: 20px
}

.product_tabs .tab-container {
    display: block
}

.product_tabs .tab-container .nav-tabs {
    flex-direction: row
}

.product_accordion.panel-group .panel-heading a::before {
    content: '\f067' !important;
    font-family: icomoon !important;
    margin-right: 3px
}

.desktop .product_accordion.panel-group .panel-heading:hover a::before {
    color: rgba(13, 82, 214, 1)
}

.product_accordion.panel-group .panel-active .panel-heading a::before {
    content: '\f068' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1)
}

.product_accordion .panel-group .panel-heading a::before {
    order: 10
}

.product_accordion .panel-group .panel-heading a {
    justify-content: space-between
}

.product_accordion.panel-group .panel-heading a {
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    padding: 15px;
    padding-right: 5px;
    padding-left: 0px
}

.product_accordion.panel-group .panel-heading:hover a {
    color: rgba(13, 82, 214, 1)
}

.product_accordion.panel-group .panel-active .panel-heading:hover a,
.product_accordion.panel-group .panel-active .panel-heading a {
    color: rgba(15, 58, 141, 1)
}

.product_accordion.panel-group .panel-heading {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.product_accordion.panel-group .panel:first-child .panel-heading {
    border-width: 0px
}

.product_accordion.panel-group .panel-body {
    padding-bottom: 20px
}

.products-filter {
    margin-bottom: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.grid-list button {
    display: inline-block
}

#btn-grid-view::before {
    content: '\e97b' !important;
    font-family: icomoon !important;
    font-size: 18px
}

#btn-list-view::before {
    content: '\e97a' !important;
    font-family: icomoon !important;
    font-size: 19px
}

.grid-list>*+* {
    margin-left: 10px
}

.grid-list .compare-btn {
    display: inline-flex;
    padding-left: 15px
}

.grid-list .links-text {
    display: inline-flex
}

.grid-list .compare-btn::before {
    margin-right: 5px;
    font-size: 18px
}

.grid-list .count-badge {
    display: inline-flex
}

.products-filter .select-group .input-group.sort-by {
    display: inline-flex
}

.products-filter .select-group .input-group.per-page {
    display: inline-flex
}

.sort-by {
    margin: 0 10px
}

.products-filter .select-group .input-group .input-group-addon {
    border-radius: 3px
}

.route-product-category .pagination-results {
    font-size: 13px;
    letter-spacing: 1px;
    margin-top: 20px;
    justify-content: flex-start
}

.route-product-category .pagination-results .text-right {
    display: block
}

.route-product-category .pagination>li>a:hover {
    color: rgba(255, 255, 255, 1)
}

.route-product-category .pagination>li.active>span,
.route-product-category .pagination>li.active>span:hover,
.route-product-category .pagination>li>a:focus {
    color: rgba(255, 255, 255, 1)
}

.route-product-category .pagination>li {
    background: rgba(248, 248, 248, 1);
    border-radius: 3px
}

.route-product-category .pagination>li>a,
.route-product-category .pagination>li>span {
    padding: 5px;
    padding-right: 6px;
    padding-left: 6px
}

.route-product-category .pagination>li:hover {
    background: rgba(15, 58, 141, 1)
}

.route-product-category .pagination>li.active {
    background: rgba(15, 58, 141, 1)
}

.route-product-category .pagination>li:first-child a::before,
.route-product-category .pagination>li:last-child a::before {
    content: '\e940' !important;
    font-family: icomoon !important
}

.route-product-category .pagination>li .prev::before,
.route-product-category .pagination>li .next::before {
    content: '\e93e' !important;
    font-family: icomoon !important
}

.route-product-category .pagination>li:not(:first-of-type) {
    margin-left: 5px
}

.main-products+.pagination-results {
    display: none
}

.ias-noneleft {
    margin: 10px;
    margin-top: 20px;
    padding: 15px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.ias-trigger-next .btn {
    margin: 10px
}

.ias-trigger-prev .btn {
    margin: 10px
}

.ias-trigger a {
    display: inline-flex
}

.ias-trigger .btn::before {
    content: '\eba7' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.main-products.product-grid .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.main-products.product-grid .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .main-products.product-grid .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .main-products.product-grid .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .main-products.product-grid .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.side-column .main-products.product-grid .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

.main-products.product-grid {
    margin: -10px;
    margin-top: 10px
}

.main-products.product-grid .product-thumb {
    background: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 7px
}

.desktop .main-products.product-grid .product-thumb:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.main-products.product-grid .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.main-products.product-grid .product-thumb .image img {
    background: rgba(238, 238, 238, 1)
}

.main-products.product-grid .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.main-products.product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px);
    margin-right: 5px;
    margin-bottom: 5px
}

.main-products.product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.main-products.product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.main-products.product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.main-products.product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 16px
}

.main-products.product-grid .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    font-family: 'Montserrat';
    font-weight: 400;
    font-size: 15px;
    color: rgba(51, 51, 51, 1);
    background: rgba(240, 242, 245, 1);
    border-radius: 3px;
    width: 90%;
    bottom: 35px
}

.main-products.product-grid .product-thumb .countdown div span {
    color: rgba(105, 105, 115, 1)
}

.main-products.product-grid .product-thumb .countdown>div {
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.main-products.product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.main-products.product-grid .product-thumb .stats {
    display: flex;
    justify-content: space-between;
    position: relative;
    transform: none;
    width: initial;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    background: rgba(240, 242, 245, 1);
    padding: 9px
}

.main-products.product-grid .product-thumb .name {
    order: initial;
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    padding-left: 10px;
    margin-top: 15px
}

.main-products.product-grid .product-thumb .stats a {
    color: rgba(139, 145, 152, 1)
}

.main-products.product-grid .product-thumb .stats a:hover {
    color: rgba(233, 102, 49, 1)
}

.main-products.product-grid .stat-1 .stats-label {
    display: none
}

.main-products.product-grid .stat-2 .stats-label {
    display: none
}

.main-products.product-grid .product-thumb .stats .stat-1 {
    padding-right: 5px;
    padding-left: 5px
}

.main-products.product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: visible;
    opacity: 1;
    top: 0
}

.main-products.product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.main-products.product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.main-products.product-grid .product-thumb .rating.no-rating {
    display: none
}

.main-products.product-grid .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.main-products.product-grid .product-thumb .rating .fa-star,
.main-products.product-grid .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.main-products.product-grid .product-thumb .rating-stars {
    padding: 5px;
    margin-top: -5px
}

.main-products.product-grid .product-thumb .rating.no-rating span {
    opacity: 0.3
}

.main-products.product-grid .product-thumb .name a {
    white-space: normal;
    overflow: visible;
    text-overflow: initial;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 16px;
    color: rgba(51, 51, 51, 1);
    text-align: left
}

.main-products.product-grid .product-thumb .description {
    display: none;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    margin-top: 10px
}

.main-products.product-grid .product-thumb .price {
    display: block;
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    padding-left: 10px;
    margin-top: 5px;
    margin-bottom: 15px
}

.main-products.product-grid .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    text-align: center
}

.main-products.product-grid .product-thumb .price-old {
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    font-weight: 400;
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.main-products.product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.main-products.product-grid .product-thumb .price-new {
    margin: 0 7px 0 0;
    order: 1
}

.main-products.product-grid .product-thumb .buttons-wrapper {
    display: block
}

.main-products.product-grid .product-thumb .button-group {
    justify-content: space-between
}

.main-products.product-grid.product-grid .product-thumb .button-group {
    padding-bottom: 15px;
    padding-left: 10px
}

.main-products.product-grid .product-thumb .cart-group {
    display: inline-flex
}

.main-products.product-grid .product-thumb .btn-wishlist {
    width: 40px;
    height: 40px;
    display: inline-flex
}

.main-products.product-grid .product-thumb .btn-compare {
    width: 40px;
    height: 40px;
    display: inline-flex
}

.main-products.product-grid .product-thumb .btn-cart::before {
    display: none;
    font-size: 17px
}

.main-products.product-grid .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0
}

.main-products.product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.main-products.product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.main-products.product-grid .product-thumb .btn-cart.btn,
.main-products.product-grid .product-thumb .btn-cart.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.main-products.product-grid .product-thumb .btn-cart.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.main-products.product-grid .product-thumb .btn-cart.btn:active,
.main-products.product-grid .product-thumb .btn-cart.btn:hover:active,
.main-products.product-grid .product-thumb .btn-cart.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-grid .product-thumb .btn-cart.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-grid .product-thumb .btn-cart.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important;
    padding: 10px !important
}

.desktop .main-products.product-grid .product-thumb .btn-cart.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.main-products.product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-grid .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    height: 33px
}

.main-products.product-grid .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.main-products.product-grid .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.main-products.product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.main-products.product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.main-products.product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 20px;
    color: rgba(139, 145, 152, 1)
}

.main-products.product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.desktop .main-products.product-grid .product-thumb .btn-wishlist:hover::before {
    color: rgba(13, 82, 214, 1)
}

.main-products.product-grid .product-thumb .btn-wishlist.btn,
.main-products.product-grid .product-thumb .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-grid .product-thumb .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-grid .product-thumb .btn-wishlist.btn:active,
.main-products.product-grid .product-thumb .btn-wishlist.btn:hover:active,
.main-products.product-grid .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .main-products.product-grid .product-thumb .btn-wishlist.btn:hover {
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 18px;
    color: rgba(139, 145, 152, 1)
}

.main-products.product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.desktop .main-products.product-grid .product-thumb .btn-compare:hover::before {
    color: rgba(13, 82, 214, 1)
}

.main-products.product-grid .product-thumb .btn-compare.btn,
.main-products.product-grid .product-thumb .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-grid .product-thumb .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-grid .product-thumb .btn-compare.btn:active,
.main-products.product-grid .product-thumb .btn-compare.btn:hover:active,
.main-products.product-grid .product-thumb .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .main-products.product-grid .product-thumb .btn-compare.btn:hover {
    box-shadow: none
}

.main-products.product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-grid .product-thumb .extra-group {
    display: block
}

.main-products.product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.main-products.product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.main-products.product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 14px;
    color: rgba(80, 173, 85, 1)
}

.main-products.product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 14px;
    color: rgba(221, 14, 28, 1)
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.main-products.product-grid .product-layout .extra-group>div {
    justify-content: space-between
}

.main-products.product-grid .product-thumb .extra-group>div {
    background: rgba(240, 242, 245, 1);
    padding: 9px
}

.main-products.product-grid .product-thumb .extra-group .btn.btn,
.main-products.product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-grid .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-grid .product-thumb .extra-group .btn.btn:active,
.main-products.product-grid .product-thumb .extra-group .btn.btn:hover:active,
.main-products.product-grid .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .main-products.product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn,
.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.main-products.product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.main-products.product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.main-products.product-grid.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.main-products.product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.main-products.product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.main-products.product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: center
}

.main-products.product-grid .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

.main-products.product-list .product-thumb {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding-bottom: 25px
}

.main-products.product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
    margin-top: 25px
}

.main-products.product-list .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.main-products.product-list .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.main-products.product-list .product-thumb .product-img img {
    border-radius: 5px
}

.main-products.product-list .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.main-products.product-list .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.main-products.product-list .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.main-products.product-list .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.main-products.product-list .product-thumb .btn-quickview .btn-text {
    display: none
}

.main-products.product-list .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.main-products.product-list .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    bottom: 10px
}

.main-products.product-list.product-list .product-layout .image {
    float: left;
    height: 100%
}

.main-products.product-list .product-thumb .caption {
    padding-left: 20px
}

.main-products.product-list .product-thumb .stats {
    display: flex;
    justify-content: flex-start;
    margin-bottom: 10px
}

.main-products.product-list .stat-1 .stats-label {
    display: inline-block
}

.main-products.product-list .stat-2 .stats-label {
    display: inline-block
}

.main-products.product-list.product-grid .product-thumb .rating {
    position: static;
    visibility: visible;
    opacity: 1
}

.main-products.product-list .product-thumb .rating {
    justify-content: flex-end;
    margin-bottom: 5px;
    display: flex
}

.main-products.product-list .product-thumb .rating.no-rating {
    display: none
}

.main-products.product-list .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.main-products.product-list .product-thumb .rating .fa-star,
.main-products.product-list .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.main-products.product-list .product-thumb .rating-stars {
    margin-top: -18px
}

.main-products.product-list .product-thumb .rating.no-rating span {
    opacity: .3
}

.main-products.product-list .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 5px
}

.main-products.product-list .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 22px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    text-align: left
}

.main-products.product-list .product-thumb .description {
    display: block;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    line-height: 1.5;
    margin-top: 5px;
    margin-bottom: 10px
}

.main-products.product-list .product-thumb .price {
    display: block;
    font-family: 'Roboto';
    font-weight: 700;
    font-size: 22px;
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-bottom: 10px
}

.main-products.product-list .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1)
}

.main-products.product-list .product-thumb .price-new {
    color: rgba(233, 102, 49, 1);
    margin: 0 7px 0 0;
    order: 1
}

.main-products.product-list .product-thumb .price-old {
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.main-products.product-list .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.main-products.product-list .product-thumb .buttons-wrapper {
    display: block
}

.main-products.product-list .product-thumb .button-group {
    justify-content: flex-start
}

.main-products.product-list.product-list .product-thumb .buttons-wrapper {
    margin-top: 5px
}

.main-products.product-list .product-thumb .cart-group {
    display: inline-flex
}

.main-products.product-list .product-thumb .btn-cart {
    height: 38px;
    margin-right: 5px
}

.main-products.product-list .product-thumb .btn-wishlist {
    width: 38px;
    height: 38px;
    display: inline-flex
}

.main-products.product-list .product-thumb .btn-compare {
    width: 38px;
    height: 38px;
    display: inline-flex;
    margin-left: 5px
}

.main-products.product-list .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 16px
}

.main-products.product-list .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.main-products.product-list.product-grid .product-thumb .btn-cart {
    flex: initial
}

.main-products.product-list.product-grid .product-thumb .cart-group {
    flex: initial
}

.main-products.product-list .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    height: 38px
}

.main-products.product-list .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.main-products.product-list .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.main-products.product-list .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 16px
}

.main-products.product-list .product-thumb .btn-wishlist .btn-text {
    display: none
}

.main-products.product-list .product-thumb .btn-wishlist.btn,
.main-products.product-list .product-thumb .btn-wishlist.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.main-products.product-list .product-thumb .btn-wishlist.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.main-products.product-list .product-thumb .btn-wishlist.btn:active,
.main-products.product-list .product-thumb .btn-wishlist.btn:hover:active,
.main-products.product-list .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-wishlist.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-wishlist.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.main-products.product-list .product-thumb .btn-wishlist.btn:hover,
.main-products.product-list .product-thumb .btn-wishlist.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .main-products.product-list .product-thumb .btn-wishlist.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-list .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 16px
}

.main-products.product-list .product-thumb .btn-compare .btn-text {
    display: none
}

.main-products.product-list .product-thumb .btn-compare.btn,
.main-products.product-list .product-thumb .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.main-products.product-list .product-thumb .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.main-products.product-list .product-thumb .btn-compare.btn:active,
.main-products.product-list .product-thumb .btn-compare.btn:hover:active,
.main-products.product-list .product-thumb .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-compare.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.main-products.product-list .product-thumb .btn-compare.btn:hover,
.main-products.product-list .product-thumb .btn-compare.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .main-products.product-list .product-thumb .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.main-products.product-list .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-list .product-thumb .extra-group {
    display: block
}

.main-products.product-list .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.main-products.product-list .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.main-products.product-list .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.main-products.product-list .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.main-products.product-list .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(221, 14, 28, 1)
}

.main-products.product-list .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn {
    margin-left: 5px;
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.main-products.product-list .product-layout .extra-group>div {
    justify-content: flex-start
}

.main-products.product-list .product-thumb .extra-group>div {
    margin-top: 10px
}

.main-products.product-list .product-thumb .extra-group .btn.btn,
.main-products.product-list .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-list .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-list .product-thumb .extra-group .btn.btn:active,
.main-products.product-list .product-thumb .extra-group .btn.btn:hover:active,
.main-products.product-list .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-list .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.main-products.product-list .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .main-products.product-list .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.main-products.product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn,
.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:active,
.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.desktop .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.main-products.product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.main-products.product-list.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.main-products.product-list.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.main-products.product-list.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.main-products.product-list.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.main-products.product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.main-products.product-list.product-grid .wish-group {
    justify-content: flex-start
}

.main-products.product-list .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

.popup-options .popup-container {
    width: 400px
}

.popup-options .popup-inner-body {
    height: 380px
}

@media (max-width: 1300px) {
    #content {
        padding: 20px;
        padding-top: 0px
    }

    .column-left #content {
        padding-left: 20px
    }

    .column-right #content {
        padding-right: 20px
    }

    .side-column {
        max-width: 240px;
        padding: 20px;
        padding-left: 20px
    }

    .one-column #content {
        max-width: calc(100% - 240px)
    }

    .two-column #content {
        max-width: calc(100% - 240px * 2)
    }

    #column-right {
        padding: 20px;
        padding-top: 0px
    }

    html:not(.popup) .page-title {
        margin-right: 20px;
        margin-bottom: 20px;
        margin-left: 20px
    }

    .breadcrumb {
        padding-left: 15px
    }
}

@media (max-width: 1024px) {
    .main-posts.post-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .main-posts.post-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons {
        display: none !important
    }

    .account-list>li {
        width: calc(100% / 3)
    }

    .route-checkout-cart .cart-page {
        display: block
    }

    .cart-bottom {
        margin-top: 20px;
        margin-left: 0px
    }

    .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 5 * 20px) / 6 - 0.01px)
    }

    .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 6 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .refine-categories .swiper-container {
        padding: 0px
    }

    .refine-categories .swiper-buttons {
        display: none !important
    }

    .product-info .product-left {
        width: 100%
    }

    .product-info .product-right {
        width: 100%;
        padding-left: 0px
    }

    .product-image .swiper .swiper-controls {
        display: block
    }

    .product-info .custom-stats {
        flex-direction: column;
        align-items: flex-start
    }

    .product-info .product-details .rating {
        padding-top: 20px
    }

    .product-info .product-options .push-option input+img+.option-value {
        display: block
    }

    .route-product-product:not(.popup) .product-info .product-details .button-group-page {
        position: fixed;
        width: 100%;
        z-index: 10000;
        margin: 0;
        background: rgba(240, 242, 245, 1);
        padding: 10px;
        border-width: 0;
        border-top-width: 1px;
        border-style: solid;
        border-color: rgba(226, 226, 226, 1);
        box-shadow: 0 -10px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .route-product-product:not(.popup).has-bottom-menu .bottom-menu {
        display: none
    }

    .route-product-product:not(.popup).has-bottom-menu .site-wrapper {
        padding-bottom: 0
    }

    .route-product-product:not(.popup) body {
        padding-bottom: 55px
    }

    .route-product-product .scroll-top {
        bottom: calc(55px + 10px)
    }

    .route-product-product:not(.popup) .product-info .button-group-page .stepper {
        height: 36px;
        margin-right: 5px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart {
        flex-grow: initial;
        height: 36px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .stepper-group {
        flex-grow: initial;
        width: auto
    }

    .product-info .button-group-page .btn-extra+.btn::before {
        display: inline-block
    }

    .product-info .button-group-page .btn-extra+.btn .btn-text {
        display: inline-block;
        padding: 0 .4em
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-extra {
        height: 36px;
        padding: 10px !important
    }

    .product-info .button-group-page .extra-group .btn-extra+.btn-extra {
        margin-left: 5px
    }

    .product-info .button-group-page .extra-group .btn-extra:first-child::before {
        margin-right: 0px
    }

    .product-info .button-group-page .extra-group {
        margin-left: 5px
    }

    .route-product-product:not(.popup) .product-info .product-details .button-group-page .wishlist-compare {
        border-style: none;
        width: auto;
        padding-top: 0px;
        margin-top: 0px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn {
        height: 36px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist .btn-text {
        display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist {
        margin-right: -1px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist::before {
        font-size: 20px;
        margin-right: 0px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare .btn-text {
        display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare::before {
        margin-right: 0px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-extra+.btn-extra {
        padding: 10px !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-wishlist {
        padding: 7px !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-compare {
        padding: 7px !important
    }

    .products-filter {
        margin-top: 15px
    }

    .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .main-products.product-grid .product-thumb .countdown {
        display: none
    }

    .main-products.product-grid .product-thumb .price {
        font-size: 14px
    }

    .main-products.product-grid .product-thumb .price-old {
        font-size: 13px
    }
}

@media (max-width: 980px) {
    .blog-post .post-details .post-stats .p-posted {
        display: none
    }

    .login-box {
        flex-direction: column
    }

    .login-box .well {
        margin-right: 0px;
        margin-bottom: 30px
    }

    .login-box>div:first-of-type {
        margin-right: 0px;
        margin-bottom: 30px
    }

    .quick-checkout-wrapper>div .right {
        padding-left: 0px;
        width: 100%
    }

    .quick-checkout-wrapper>div .left {
        width: 100%
    }

    .section-payment {
        padding-top: 20px;
        padding-left: 0px;
        width: 100%
    }

    .section-shipping {
        width: 100%
    }

    .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 769px) {
    .main-products.product-list .product-thumb .rating {
        justify-content: flex-start
    }

    .main-products.product-list .product-thumb .rating-stars {
        margin-top: 0px
    }
}

@media (max-width: 760px) {
    .main-posts.post-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .main-posts.post-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .main-posts.post-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .post-list .post-thumb .btn-read-more.btn {
        border-width: 1px
    }

    html:not(.popup) .page-title {
        font-size: 22px
    }

    .route-product-product.popup-quickview .additional-images .swiper-container {
        overflow: visible
    }

    .popup-login .popup-inner-body {
        height: 310px
    }

    .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .refine-categories .swiper-container {
        overflow: visible
    }

    .route-information-sitemap #content>.row>div+div {
        margin-left: 0px
    }

    .route-information-sitemap #content>.row {
        flex-direction: column
    }

    .route-information-sitemap #content>.row>div {
        width: 100%
    }

    .product-image .main-image {
        border-style: none
    }

    .direction-horizontal .additional-image {
        width: calc(100% / 4)
    }

    .product-info .product-details .product-stats {
        padding-bottom: 20px;
        padding-left: 0px;
        border-width: 0;
        border-bottom-width: 1px;
        border-left-width: 0px
    }

    .route-product-product:not(.popup) .product-info .product-price-group {
        flex-direction: column
    }

    .route-product-product:not(.popup) .product-info .product-price-group .product-stats {
        order: -1;
        margin: initial
    }

    .route-product-product:not(.popup) .product-info .product-details .price-group {
        padding-top: 20px
    }

    .route-product-product .tags {
        margin: 20px
    }

    .product-info .button-group-page .extra-group .btn:first-child .btn-text {
        display: none
    }

    .product-info .button-group-page .extra-group .btn:first-child::before {
        display: inline-block
    }

    .product-info .button-group-page .btn-extra+.btn .btn-text {
        display: none
    }

    .product-info .button-group-page .btn-extra+.btn::before {
        display: inline-block
    }

    .main-products.product-grid .product-thumb .buttons-wrapper {
        display: block
    }

    .main-products.product-grid .product-thumb .extra-group {
        display: none
    }

    .main-products.product-list.product-list .product-layout .image {
        float: none;
        height: auto
    }

    .main-products.product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn {
        border-width: 1px
    }

    .main-products.product-list .product-thumb .btn-compare.btn {
        border-width: 1px
    }
}

@media (max-width: 470px) {
    .blog-feed {
        margin-right: -15px
    }

    .buttons>div {
        width: 100%;
        flex-basis: auto
    }

    .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
    }

    .breadcrumb a {
        font-size: 12px
    }

    table td {
        font-size: 13px
    }

    table thead td {
        text-transform: none
    }

    table tfoot td {
        font-size: 12px
    }

    label {
        font-size: 12px
    }

    .form-group .control-label {
        padding-bottom: 2px
    }

    .form-group {
        margin-bottom: 3px
    }

    input.form-control {
        height: 32px
    }

    .radio {
        font-size: 12px
    }

    .checkbox {
        font-size: 12px
    }

    .popup-quickview .popup-inner-body {
        height: 800px
    }

    .route-product-product.popup-quickview .product-info .product-left {
        width: 100%
    }

    .route-product-product.popup-quickview .product-info .product-right {
        width: 100%;
        padding-left: 0px
    }

    .route-product-product.popup-quickview h1.page-title {
        display: block
    }

    .route-product-product.popup-quickview div.page-title {
        display: none
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart .btn-text {
        display: none
    }

    .route-product-product.popup-quickview .product-info .product-details .stepper-group {
        flex-grow: initial
    }

    .route-product-product.popup-quickview .product-info .product-details .stepper-group .btn-cart {
        flex-grow: initial
    }

    .account-list>li {
        width: calc(100% / 2)
    }

    .route-checkout-cart .buttons>div {
        width: 100%;
        flex-basis: auto
    }

    .route-checkout-cart .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
    }

    .route-checkout-cart .cart-panels .buttons>div {
        width: 100%;
        flex-basis: auto
    }

    .route-checkout-cart .cart-panels .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
    }

    .quick-checkout-wrapper label {
        font-size: 12px
    }

    .quick-checkout-wrapper .form-group .control-label {
        padding-bottom: 2px
    }

    .quick-checkout-wrapper .form-group {
        margin-bottom: 3px
    }

    .quick-checkout-wrapper input.form-control {
        height: 32px
    }

    .quick-checkout-wrapper .radio {
        font-size: 12px
    }

    .quick-checkout-wrapper .checkbox {
        font-size: 12px
    }

    .quick-checkout-wrapper .right .confirm-section .buttons>div {
        width: 100%;
        flex-basis: auto
    }

    .quick-checkout-wrapper .right .confirm-section .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
    }

    .route-product-search #content .buttons>div {
        width: 100%;
        flex-basis: auto
    }

    .route-product-search #content .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart::before {
        display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart .btn-text {
        display: inline-block;
        padding: 0
    }

    .grid-list .links-text {
        display: none
    }

    .grid-list .compare-btn::before {
        margin-right: 0
    }

    .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .two-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .main-products.product-grid .product-thumb .name a {
        font-size: 14px
    }

    .main-products.product-grid .product-thumb .btn-cart .btn-text {
        display: none
    }

    .main-products.product-grid .product-thumb .btn-cart::before {
        display: inline-block
    }

    .main-products.product-grid .product-thumb .stepper {
        height: 37px
    }
}

@media (max-width: 359px) {
    html:not(.popup) .page-title {
        font-size: 16px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart::before {
        display: inline-block
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart .btn-text {
        display: none
    }

    .product-info .button-group-page .btn-cart::before {
        margin-right: 0px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart {
        padding: 10px !important
    }
}

#cart .cart-label {
    display: inline-block;
    color: rgba(240, 242, 245, 1)
}

#cart>a>i::before {
    font-size: 24px;
    color: rgba(255, 255, 255, 1);
    left: 1px;
    top: -1px
}

#cart>a>i {
    background: rgba(13, 82, 214, 1);
    border-radius: 3px;
    width: 40px;
    height: 40px
}

.desktop #cart:hover>a>i {
    background: rgba(15, 58, 141, 1)
}

#cart-items.count-badge {
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 11px;
    color: rgba(255, 255, 255, 1);
    background: rgba(221, 14, 28, 1);
    border-width: 2px;
    border-style: solid;
    border-color: rgba(248, 248, 248, 1);
    border-radius: 50px
}

#cart-items .count-zero {
    display: none !important
}

#cart-items {
    transform: translateX(5px);
    margin-top: -7px;
    display: inline-flex;
    z-index: 1
}

#cart-total {
    display: flex;
    padding-right: 15px;
    padding-left: 15px;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    order: 0
}

.desktop #cart:hover #cart-total {
    color: rgba(15, 58, 141, 1)
}

#cart {
    display: block
}

#cart-content {
    min-width: 400px
}

div.cart-content ul {
    background: rgba(255, 255, 255, 1);
    border-radius: 3px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

div.cart-content .cart-products tbody>tr>td {
    border-style: solid !important;
    border-color: rgba(226, 226, 226, 1) !important;
    vertical-align: middle
}

#cart-content::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: -2px;
    margin-top: -6px
}

div.cart-content .cart-products {
    max-height: 275px;
    overflow-y: auto
}

div.cart-content .cart-totals tbody td {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
    background: rgba(238, 238, 238, 1);
    border-style: none !important
}

div.cart-content .cart-products tbody .td-remove button {
    color: rgba(221, 14, 28, 1)
}

div.cart-content .cart-products tbody .td-remove button:hover {
    color: rgba(80, 173, 85, 1)
}

div.cart-content .cart-totals td {
    font-weight: 700
}

div.cart-content .cart-totals .td-total-text {
    font-weight: 700
}

div.cart-content .cart-buttons {
    background: rgba(230, 230, 230, 1)
}

div.cart-content .btn-cart {
    display: inline-flex
}

div.cart-content .btn.btn-cart::before {
    content: none !important
}

div.cart-content .btn-checkout {
    display: inline-flex
}

div.cart-content .btn-checkout.btn {
    background: rgba(80, 173, 85, 1)
}

div.cart-content .btn-checkout.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

div.cart-content .btn-checkout.btn.btn.disabled::after {
    font-size: 20px
}

div.cart-content .cart-buttons .btn {
    width: auto
}

.desktop-header-active #cart {
    margin-left: 25px
}

.desktop-header-active header {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.desktop-header-active .header-lg .mid-bar {
    height: 100px
}

.desktop-header-active .header-default {
    height: 100px
}

.desktop-header-active .header-default::before {
    content: '';
    height: calc(100px / 3)
}

.desktop-header-active .header-sm .mid-bar {
    height: 50px
}

.info-blocks-wrapper {
    justify-content: flex-end
}

.language .dropdown-toggle .symbol {
    display: flex
}

.language .dropdown-toggle .symbol+span {
    display: block;
    margin-left: 5px
}

.language .language-flag {
    display: inline-flex
}

.language .currency-symbol {
    display: inline-flex
}

.language .language-title-dropdown {
    display: inline-flex
}

.language .currency-title-dropdown {
    display: inline-flex
}

.language .currency-code-dropdown {
    display: none
}

.language .dropdown-toggle>span,
.language .dropdown::after {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400
}

.desktop .language .dropdown:hover button>span,
.language .dropdown:hover::after {
    color: rgba(13, 82, 214, 1)
}

.currency .dropdown-toggle .symbol {
    display: flex
}

.currency .dropdown-toggle .symbol+span {
    display: block;
    margin-left: 5px
}

.currency .language-flag {
    display: inline-flex
}

.currency .currency-symbol {
    display: inline-flex
}

.currency .language-title-dropdown {
    display: inline-flex
}

.currency .currency-title-dropdown {
    display: inline-flex
}

.currency .currency-code-dropdown {
    display: none
}

.currency .dropdown-toggle>span,
.currency .dropdown::after {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400
}

.desktop .currency .dropdown:hover button>span,
.currency .dropdown:hover::after {
    color: rgba(13, 82, 214, 1)
}

.language-currency.top-menu .dropdown.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.language-currency.top-menu .dropdown.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.language-currency.top-menu .dropdown.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.language-currency.top-menu .dropdown.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a::after {
    display: block
}

.language-currency.top-menu .dropdown.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.language-currency.top-menu .dropdown.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .language-currency.top-menu .dropdown.dropdown .j-menu>li:hover>a::before,
.language-currency.top-menu .dropdown.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .language-currency.top-menu .dropdown.dropdown .j-menu>li:hover>a,
.language-currency.top-menu .dropdown.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.language-currency.top-menu .dropdown.dropdown .j-menu>li+li {
    margin-left: 0px
}

.language-currency.top-menu .dropdown.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.language-currency.top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.language-currency.top-menu .dropdown.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.language-currency.top-menu .dropdown.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

.language-currency.top-menu .currency .dropdown.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.language-currency.top-menu .currency .dropdown.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.language-currency.top-menu .currency .dropdown.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu .dropdown>a::after {
    display: block
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .language-currency.top-menu .currency .dropdown.dropdown .j-menu>li:hover>a::before,
.language-currency.top-menu .currency .dropdown.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .language-currency.top-menu .currency .dropdown.dropdown .j-menu>li:hover>a,
.language-currency.top-menu .currency .dropdown.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu>li+li {
    margin-left: 0px
}

.language-currency.top-menu .currency .dropdown.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.language-currency.top-menu .currency .dropdown.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.language-currency.top-menu .currency .dropdown.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.language-currency.top-menu .currency .dropdown.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

.desktop-header-active .header .top-bar .language-currency {
    position: absolute;
    left: 50%;
    transform: translateX(-50%)
}

.desktop-header-active .header .top-bar {
    justify-content: space-between;
    height: 35px
}

.desktop-header-active .header .desktop-logo-wrapper {
    width: 205px
}

.desktop-header-active .header-classic .mid-bar .desktop-logo-wrapper {
    width: 205px;
    order: 0;
    margin: 0
}

.desktop-header-active .header #logo a {
    justify-content: flex-start
}

.desktop-header-active .header-classic .mid-bar .desktop-search-wrapper {
    order: 2;
    flex-grow: 1
}

.desktop-logo-wrapper {
    width: auto
}

.desktop-search-wrapper {
    width: auto;
    margin-right: 40px;
    margin-left: 25px
}

.classic-cart-wrapper {
    width: auto
}

.desktop-header-active header:not(.header-slim) .header-compact .mid-bar {
    justify-content: flex-start
}

.desktop-header-active header:not(.header-slim) .header-compact .mid-bar>div {
    max-width: none
}

.desktop-header-active header:not(.header-slim) .header-compact .header-cart-group {
    margin-left: auto
}

.desktop-header-active header:not(.header-slim) .header-compact .mid-bar .desktop-logo-wrapper {
    position: relative;
    left: 0;
    transform: translateX(0)
}

.desktop-main-menu-wrapper .first-dropdown::before {
    display: block !important;
    background-color: rgba(0, 0, 0, 0.5)
}

.desktop.safari {
    overflow-x: hidden
}

.main-menu>.j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.main-menu>.j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.main-menu>.j-menu .dropdown>a::after {
    display: none
}

.main-menu>.j-menu>li>a {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    text-transform: uppercase;
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.desktop .main-menu>.j-menu>li:hover>a,
.main-menu>.j-menu>li.active>a {
    color: rgba(51, 51, 51, 1);
    background: rgba(255, 255, 255, 1)
}

.main-menu>.j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.main-menu>.j-menu>li>a::before {
    margin-right: 5px;
    font-size: 18px
}

.main-menu>.j-menu li .count-badge {
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 11px;
    color: rgba(255, 255, 255, 1);
    background: rgba(221, 14, 28, 1);
    border-width: 2px;
    border-style: solid;
    border-color: rgba(248, 248, 248, 1);
    border-radius: 50px
}

.main-menu>.j-menu li .count-zero {
    display: none !important
}

.main-menu>.j-menu a .count-badge {
    display: inline-flex;
    position: relative;
    margin-top: -3px
}

.main-menu>ul>.drop-menu>.j-dropdown {
    left: 0;
    right: auto;
    transform: translate3d(0, -10px, 0)
}

.main-menu>ul>.drop-menu.animating>.j-dropdown {
    left: 0;
    right: auto;
    transform: none
}

.main-menu>ul>.drop-menu>.j-dropdown::before {
    left: 10px;
    right: auto;
    transform: translateX(0)
}

.main-menu>ul>.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.main-menu>ul>.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.main-menu>ul>.dropdown .j-menu .dropdown>a::after {
    display: block
}

.main-menu>ul>.dropdown .j-menu>li>a {
    font-size: 14px;
    color: rgba(58, 71, 84, 1);
    font-weight: 400;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 15px
}

.main-menu>ul>.dropdown .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.main-menu>ul>.dropdown .j-menu>li>a::before {
    margin-right: 7px;
    min-width: 20px;
    font-size: 18px
}

.desktop .main-menu>ul>.dropdown .j-menu>li:hover>a,
.main-menu>ul>.dropdown .j-menu>li.active>a {
    background: rgba(240, 242, 245, 1)
}

.main-menu>ul>.dropdown .j-menu>li>a,
.main-menu>ul>.dropdown.accordion-menu .menu-item>a+div,
.main-menu>ul>.dropdown .accordion-menu .menu-item>a+div {
    border-style: none
}

.main-menu>ul>.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.main-menu>ul>.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 200px
}

.main-menu>ul>.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.main-menu>ul>.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: 7px;
    margin-top: -10px
}

.mega-menu-content {
    background: rgba(255, 255, 255, 1)
}

.j-dropdown>.mega-menu-content {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.desktop-header-active .header-compact .desktop-main-menu-wrapper {
    height: 100%
}

.header-lg .desktop-main-menu-wrapper .main-menu .main-menu-item>a {
    height: 100%
}

.desktop-header-active .header-compact .desktop-logo-wrapper {
    order: 0
}

.desktop-main-menu-wrapper #main-menu {
    margin-left: 0;
    margin-right: auto
}

.desktop-main-menu-wrapper .desktop-cart-wrapper {
    margin-left: 0
}

.mid-bar #main-menu-2 {
    order: 5
}

.desktop-header-active .header .menu-stretch .main-menu-item>a .links-text {
    text-align: center
}

.desktop-main-menu-wrapper::before {
    background: rgba(13, 82, 214, 1);
    height: 43px
}

.desktop-main-menu-wrapper {
    height: 43px;
    top: -43px
}

.desktop-main-menu-wrapper .main-menu-item>a {
    padding: 0 15px
}

.header-compact .desktop-main-menu-wrapper #main-menu {
    margin-left: initial;
    margin-right: auto
}

.desktop-header-active .menu-trigger a {
    padding: 0 15px
}

.desktop-header-active .menu-trigger a::before {
    content: '\f0c9' !important;
    font-family: icomoon !important;
    margin-right: 7px
}

.desktop-header-active .mobile-wrapper-header>span {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase
}

.desktop-header-active .mobile-wrapper-header {
    background: rgba(240, 242, 245, 1);
    height: 45px
}

.desktop-header-active .mobile-wrapper-header>a::before {
    content: '\e981' !important;
    font-family: icomoon !important;
    color: rgba(105, 105, 115, 1);
    margin-right: 3px
}

.desktop-header-active .mobile-wrapper-header>a {
    width: 45px
}

.desktop-header-active .mobile-cart-content-wrapper {
    padding-bottom: 45px
}

.desktop-header-active .mobile-filter-wrapper {
    padding-bottom: 45px
}

.desktop-header-active .mobile-main-menu-wrapper {
    padding-bottom: 45px
}

.desktop-header-active .mobile-filter-container-open .journal-loading-overlay {
    top: 45px
}

.desktop-header-active.mobile-header-active .mobile-container {
    width: 30%
}

.desktop-header-active.desktop-header-active .mobile-main-menu-container {
    width: 300px
}

.desktop-header-active .mobile-main-menu-container {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.desktop-header-active .mobile-main-menu-wrapper .main-menu {
    padding: 10px
}

.desktop-header-active .mobile-cart-content-container {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.desktop-header-active.mobile-overlay .site-wrapper::before {
    background: rgba(0, 0, 0, 0.5)
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .dropdown>a::after {
    display: none
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu>li>a {
    font-size: 15px;
    color: rgba(51, 51, 51, 1);
    font-weight: 400;
    padding: 8px;
    padding-right: 0px;
    padding-left: 0px
}

.desktop .desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu>li:hover>a,
.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu>li.active>a {
    color: rgba(13, 82, 214, 1)
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu>li>a::before {
    color: rgba(139, 145, 152, 1);
    margin-right: 10px;
    min-width: 20px;
    font-size: 18px
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu a .count-badge {
    display: none;
    position: relative
}

.desktop-header-active .mobile-main-menu-container .main-menu .open-menu i::before {
    content: '\eba1' !important;
    font-family: icomoon !important;
    font-size: 16px;
    left: 5px
}

.desktop-header-active .mobile-main-menu-container .main-menu .open-menu[aria-expanded='true'] i::before {
    content: '\eb86' !important;
    font-family: icomoon !important;
    font-size: 16px;
    color: rgba(80, 173, 85, 1);
    left: 5px
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu .dropdown>a::after {
    display: none
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu>li>a {
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    text-transform: none;
    padding: 5px
}

.desktop .desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu>li:hover>a,
.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu>li.active>a {
    color: rgba(13, 82, 214, 1)
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.desktop-header-active .mobile-main-menu-container .main-menu.accordion-menu .j-menu .j-menu a .count-badge {
    display: none;
    position: relative
}

.desktop-header-active .mobile-main-menu-container .main-menu .j-menu>li>div .j-menu>li>a {
    padding-left: 18px !important
}

.desktop-header-active .mobile-main-menu-container .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>a {
    padding-left: 30px !important
}

.desktop-header-active .mobile-main-menu-container .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
    padding-left: 40px !important
}

.desktop-header-active .mobile-main-menu-container .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
    padding-left: 50px !important
}

.header-search {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(223, 231, 246, 1);
    border-radius: 3px
}

.desktop .header-search.focused,
.header-search.focused:hover {
    border-color: rgba(13, 82, 214, 1)
}

.header-search>.search-button::before {
    content: '\f002' !important;
    font-family: icomoon !important;
    font-size: 20px;
    color: rgba(223, 231, 246, 1);
    top: -1px
}

.desktop .header-search>.search-button:hover::before {
    color: rgba(255, 255, 255, 1) !important
}

.header-search .search-button {
    background: rgba(13, 82, 214, 1);
    min-width: 40px
}

.desktop .header-search .search-button:hover {
    background: rgba(15, 58, 141, 1)
}

#search input::-webkit-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

#search input::-moz-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

#search input:-ms-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

.search-categories {
    background: rgba(13, 82, 214, 1)
}

.desktop .search-categories:hover {
    background: rgba(15, 58, 141, 1)
}

.search-categories-button,
.search-categories-button>a {
    color: rgba(223, 231, 246, 1)
}

.desktop .search-categories:hover .search-categories-button {
    color: rgba(255, 255, 255, 1)
}

.search-categories-button::after {
    content: '\f0d7' !important;
    font-family: icomoon !important;
    top: 1px
}

.search-categories.drop-menu>.j-dropdown {
    left: 0;
    right: auto;
    transform: translate3d(0, -10px, 0)
}

.search-categories.drop-menu.animating>.j-dropdown {
    left: 0;
    right: auto;
    transform: none
}

.search-categories.drop-menu>.j-dropdown::before {
    left: 10px;
    right: auto;
    transform: translateX(0)
}

.search-categories.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.search-categories.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.search-categories.dropdown .j-menu .dropdown>a::after {
    display: block
}

.search-categories.dropdown .j-menu>li>a {
    font-size: 14px;
    color: rgba(58, 71, 84, 1);
    font-weight: 400;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 15px
}

.search-categories.dropdown .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.search-categories.dropdown .j-menu>li>a::before {
    margin-right: 7px;
    min-width: 20px;
    font-size: 18px
}

.desktop .search-categories.dropdown .j-menu>li:hover>a,
.search-categories.dropdown .j-menu>li.active>a {
    background: rgba(240, 242, 245, 1)
}

.search-categories.dropdown .j-menu>li>a,
.search-categories.dropdown.accordion-menu .menu-item>a+div,
.search-categories.dropdown .accordion-menu .menu-item>a+div {
    border-style: none
}

.search-categories.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.search-categories.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 200px
}

.search-categories.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.search-categories.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: 7px;
    margin-top: -10px
}

.search-categories .j-menu::before {
    margin-top: -10px
}

.tt-menu>div {
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.tt-menu:not(.tt-empty)::before {
    display: block;
    margin-top: -10px;
    left: 100%;
    transform: translateX(-150%)
}

.search-result .product-name {
    font-weight: 700
}

.search-result>a>span {
    justify-content: flex-start
}

.search-result.view-more a::after {
    content: '\e5c8' !important;
    font-family: icomoon !important
}

#search {
    display: block
}

.desktop-header-active .header-default .desktop-search-wrapper {
    order: 1;
    flex-grow: 0
}

.desktop-header-active .header-default .top-menu-group {
    order: -1;
    flex-grow: 1
}

.desktop-header-active .header-search .search-button {
    order: 5;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: inherit;
    border-bottom-right-radius: inherit
}

.desktop-header-active .header-search>input:first-child {
    border-top-left-radius: inherit;
    border-bottom-left-radius: inherit;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.desktop-header-active .header-search>input {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.desktop-header-active .header-search>span:first-child {
    border-top-left-radius: inherit;
    border-bottom-left-radius: inherit;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.desktop-header-active .header-search>span {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.desktop-header-active .search-categories {
    border-top-left-radius: inherit;
    border-bottom-left-radius: inherit;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.desktop-header-active .mini-search .header-search input {
    min-width: 150px
}

.desktop-header-active .header .full-search #search {
    height: 40px
}

.mini-search .search-trigger::before {
    content: '\f002' !important;
    font-family: icomoon !important
}

.mini-search #search>.dropdown-menu::before {
    display: block;
    margin-top: -10px
}

.secondary-menu .top-menu .j-menu>li>a {
    flex-direction: column;
    font-size: 11px;
    padding: 5px
}

.secondary-menu .top-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.secondary-menu .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.secondary-menu .top-menu .j-menu .dropdown>a::after {
    display: none
}

.secondary-menu .top-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.secondary-menu .top-menu .j-menu>li>a::before {
    color: rgba(105, 105, 115, 1);
    margin: 0px;
    margin-bottom: 2px;
    font-size: 26px
}

.desktop .secondary-menu .top-menu .j-menu>li:hover>a::before,
.secondary-menu .top-menu .j-menu>li.active>a::before {
    color: rgba(13, 82, 214, 1)
}

.secondary-menu .top-menu .j-menu>li+li {
    margin-left: 4px
}

.secondary-menu .top-menu .j-menu a .count-badge {
    display: inline-flex;
    position: absolute;
    margin: 0;
    transform: translateX(15px);
    margin-top: -5px
}

.secondary-menu .menu-item.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.secondary-menu .menu-item.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.secondary-menu .menu-item.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.secondary-menu .menu-item.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.secondary-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.secondary-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.secondary-menu .menu-item.dropdown .j-menu .dropdown>a::after {
    display: block
}

.secondary-menu .menu-item.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.secondary-menu .menu-item.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .secondary-menu .menu-item.dropdown .j-menu>li:hover>a::before,
.secondary-menu .menu-item.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .secondary-menu .menu-item.dropdown .j-menu>li:hover>a,
.secondary-menu .menu-item.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.secondary-menu .menu-item.dropdown .j-menu>li+li {
    margin-left: 0px
}

.secondary-menu .menu-item.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.secondary-menu .menu-item.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.secondary-menu .menu-item.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.secondary-menu .menu-item.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

.mid-bar .secondary-menu {
    justify-content: flex-end
}

.third-menu .top-menu .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    padding: 5px
}

.third-menu .top-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.third-menu .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.third-menu .top-menu .j-menu .dropdown>a::after {
    display: block
}

.desktop .third-menu .top-menu .j-menu>li:hover>a,
.third-menu .top-menu .j-menu>li.active>a {
    color: rgba(13, 82, 214, 1)
}

.third-menu .top-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.third-menu .top-menu .j-menu>li>a::before {
    margin-right: 5px;
    font-size: 14px
}

.third-menu .top-menu .j-menu>li+li {
    margin-left: 5px
}

.third-menu .top-menu .j-menu a .count-badge {
    display: inline-flex;
    position: relative
}

.third-menu .menu-item.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.third-menu .menu-item.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.third-menu .menu-item.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.third-menu .menu-item.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.third-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.third-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.third-menu .menu-item.dropdown .j-menu .dropdown>a::after {
    display: block
}

.third-menu .menu-item.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.third-menu .menu-item.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .third-menu .menu-item.dropdown .j-menu>li:hover>a::before,
.third-menu .menu-item.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .third-menu .menu-item.dropdown .j-menu>li:hover>a,
.third-menu .menu-item.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.third-menu .menu-item.dropdown .j-menu>li+li {
    margin-left: 0px
}

.third-menu .menu-item.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.third-menu .menu-item.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.third-menu .menu-item.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.third-menu .menu-item.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

.desktop-header-active .is-sticky .header .desktop-main-menu-wrapper::before {
    width: 100vw;
    margin-left: -50vw;
    left: 50%;
    ;
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.desktop-header-active header::before {
    content: '';
    height: 35px
}

header::before {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.top-menu .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    padding: 5px
}

.top-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.top-menu .j-menu .dropdown>a::after {
    display: block
}

.desktop .top-menu .j-menu>li:hover>a,
.top-menu .j-menu>li.active>a {
    color: rgba(13, 82, 214, 1)
}

.top-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.top-menu .j-menu>li>a::before {
    margin-right: 5px;
    font-size: 14px
}

.top-menu .j-menu>li+li {
    margin-left: 5px
}

.top-menu .j-menu a .count-badge {
    display: inline-flex;
    position: relative
}

.top-menu .dropdown.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.top-menu .dropdown.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.top-menu .dropdown.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.top-menu .dropdown.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.top-menu .dropdown.dropdown .j-menu .dropdown>a::after {
    display: block
}

.top-menu .dropdown.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.top-menu .dropdown.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .top-menu .dropdown.dropdown .j-menu>li:hover>a::before,
.top-menu .dropdown.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .top-menu .dropdown.dropdown .j-menu>li:hover>a,
.top-menu .dropdown.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.top-menu .dropdown.dropdown .j-menu>li+li {
    margin-left: 0px
}

.top-menu .dropdown.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.top-menu .dropdown.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.top-menu .dropdown.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

@media (max-width: 1300px) {
    #cart-items {
        transform: translateX(0px)
    }

    .desktop-header-active #cart {
        margin-right: 20px
    }

    .desktop-header-active .header #logo a {
        padding-left: 20px
    }

    .header .top-bar {
        padding-right: 10px;
        padding-left: 10px
    }
}

@media (max-width: 1024px) {

    .language .dropdown-toggle>span,
    .language .dropdown::after {
        font-size: 11px;
        color: rgba(255, 255, 255, 1)
    }

    .currency .dropdown-toggle>span,
    .currency .dropdown::after {
        font-size: 11px;
        color: rgba(255, 255, 255, 1)
    }

    .j-dropdown>.mega-menu-content {
        max-height: 500px !important;
        overflow-y: auto
    }

    .desktop-header-active.mobile-header-active .mobile-container {
        width: 40%
    }

    .third-menu .top-menu .j-menu>li>a {
        font-size: 12px;
        color: rgba(255, 255, 255, 1)
    }

    .top-menu .j-menu>li>a {
        font-size: 12px;
        color: rgba(255, 255, 255, 1)
    }
}

@media (max-width: 760px) {
    .desktop-header-active.mobile-header-active .mobile-container {
        width: 85%
    }
}

.mobile-header-active #cart>a>i::before {
    font-size: 28px;
    color: rgba(51, 51, 51, 1)
}

.mobile-cart-wrapper #cart>a>i {
    background: rgba(0, 0, 0, 0)
}

.mobile-header-active #cart>a>i {
    width: 65px;
    height: 60px
}

.mobile-header-active .mobile-wrapper-header>span {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase
}

.mobile-header-active .mobile-wrapper-header {
    background: rgba(240, 242, 245, 1);
    height: 45px;
    background: rgba(240, 242, 245, 1);
    height: 45px
}

.mobile-header-active .mobile-wrapper-header>a::before {
    content: '\e981' !important;
    font-family: icomoon !important;
    color: rgba(105, 105, 115, 1);
    margin-right: 3px;
    content: '\e981' !important;
    font-family: icomoon !important;
    color: rgba(105, 105, 115, 1);
    margin-right: 3px
}

.mobile-header-active .mobile-wrapper-header>a {
    width: 45px;
    width: 45px
}

.mobile-header-active .mobile-cart-content-wrapper {
    padding-bottom: 45px;
    padding-bottom: 45px
}

.mobile-header-active .mobile-filter-wrapper {
    padding-bottom: 45px;
    padding-bottom: 45px
}

.mobile-header-active .mobile-main-menu-wrapper {
    padding-bottom: 45px;
    padding-bottom: 45px
}

.mobile-header-active .mobile-filter-container-open .journal-loading-overlay {
    top: 45px;
    top: 45px
}

.mobile-header-active.mobile-header-active .mobile-container {
    width: 30%;
    width: 30%
}

.mobile-header-active.desktop-header-active .mobile-main-menu-container {
    width: 300px;
    width: 300px
}

.mobile-header-active .mobile-main-menu-container {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.mobile-header-active .mobile-main-menu-wrapper .main-menu {
    padding: 10px;
    padding: 10px
}

.mobile-header-active .mobile-cart-content-container {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.mobile-header-active.mobile-overlay .site-wrapper::before {
    background: rgba(0, 0, 0, 0.5);
    background: rgba(0, 0, 0, 0.5)
}

.mobile-header-active #cart-items.count-badge {
    transform: translateX(-10px);
    margin-top: 10px;
    display: inline-flex
}

.mobile-header-active .mobile-bar {
    background: rgba(255, 255, 255, 1)
}

.mobile-header-active .mobile-1 .mobile-bar {
    height: 60px
}

.mobile-header-active .mobile-2 .mobile-bar {
    height: 60px
}

.mobile-header-active .mobile-3 .mobile-logo-wrapper {
    height: 60px
}

.mobile-header-active .mobile-bar-sticky {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.mobile-header-active .language .dropdown-toggle .symbol {
    display: flex
}

.mobile-header-active .language .dropdown-toggle .symbol+span {
    display: block;
    margin-left: 5px
}

.mobile-header-active .language .language-flag {
    display: inline-flex
}

.mobile-header-active .language .currency-symbol {
    display: inline-flex
}

.mobile-header-active .language .language-title-dropdown {
    display: inline-flex
}

.mobile-header-active .language .currency-title-dropdown {
    display: inline-flex
}

.mobile-header-active .language .currency-code-dropdown {
    display: none
}

.mobile-header-active .language .dropdown-toggle>span,
.mobile-header-active .language .dropdown::after {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400
}

.desktop .mobile-header-active .language .dropdown:hover button>span,
.mobile-header-active .language .dropdown:hover::after {
    color: rgba(13, 82, 214, 1)
}

.mobile-header-active .currency .dropdown-toggle .symbol {
    display: flex
}

.mobile-header-active .currency .dropdown-toggle .symbol+span {
    display: block;
    margin-left: 5px
}

.mobile-header-active .currency .language-flag {
    display: inline-flex
}

.mobile-header-active .currency .currency-symbol {
    display: inline-flex
}

.mobile-header-active .currency .language-title-dropdown {
    display: inline-flex
}

.mobile-header-active .currency .currency-title-dropdown {
    display: inline-flex
}

.mobile-header-active .currency .currency-code-dropdown {
    display: none
}

.mobile-header-active .currency .dropdown-toggle>span,
.mobile-header-active .currency .dropdown::after {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400
}

.desktop .mobile-header-active .currency .dropdown:hover button>span,
.mobile-header-active .currency .dropdown:hover::after {
    color: rgba(13, 82, 214, 1)
}

.mobile-header-active .language-currency.top-menu.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.mobile-header-active .language-currency.top-menu.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.mobile-header-active .language-currency.top-menu.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a::after {
    display: block
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li:hover>a::before,
.mobile-header-active .language-currency.top-menu.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li:hover>a,
.mobile-header-active .language-currency.top-menu.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu>li+li {
    margin-left: 0px
}

.mobile-header-active .language-currency.top-menu.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.mobile-header-active .language-currency.top-menu.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.mobile-header-active .language-currency.top-menu.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.mobile-header-active .language-currency.top-menu.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

.mobile-header-active #logo a {
    padding: 15px
}

.mobile-header-active .menu-trigger::before {
    content: '\e8d2' !important;
    font-family: icomoon !important;
    font-size: 33px
}

.mobile-header-active .menu-trigger {
    width: 50px;
    height: 60px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a::after {
    display: none
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li>a {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 16px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    padding: 10px;
    padding-left: 0px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li>a::before {
    color: rgba(139, 145, 152, 1);
    margin-right: 10px;
    min-width: 24px;
    font-size: 24px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu a .count-badge {
    display: inline-flex;
    position: relative
}

.mobile-main-menu-wrapper .main-menu .open-menu i::before {
    content: '\eba1' !important;
    font-family: icomoon !important;
    font-size: 20px;
    left: 5px
}

.mobile-main-menu-wrapper .main-menu .open-menu[aria-expanded='true'] i::before {
    content: '\eb86' !important;
    font-family: icomoon !important;
    font-size: 20px;
    color: rgba(80, 173, 85, 1);
    left: 5px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li>a {
    flex-direction: row;
    font-family: 'Montserrat';
    font-weight: 400;
    font-size: 15px;
    color: rgba(105, 105, 115, 1);
    padding: 8px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 5px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 0
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a::after {
    display: none
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li>a::before {
    margin-right: 0px;
    font-size: 13px
}

.mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu a .count-badge {
    display: none;
    position: relative
}

.mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>a {
    padding-left: 33px !important
}

.mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>a {
    padding-left: 40px !important
}

.mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
    padding-left: 50px !important
}

.mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
    padding-left: 60px !important
}

.mobile-custom-menu-1::before {
    content: '\eb67' !important;
    font-family: icomoon !important;
    font-size: 24px;
    color: rgba(51, 51, 51, 1)
}

.mobile-custom-menu {
    width: 45px
}

.mobile-custom-menu-2 {
    width: 35px
}

.mobile-custom-menu-2::before {
    content: '\eab6' !important;
    font-family: icomoon !important;
    font-size: 22px;
    color: rgba(51, 51, 51, 1)
}

.mobile-custom-menu-1 .count-badge {
    transform: translateX(3px);
    display: inline-flex
}

.mobile-custom-menu-2 .count-badge {
    transform: translateX(5px);
    display: inline-flex
}

.mobile-header-active .mini-search .search-trigger::before {
    content: '\f002' !important;
    font-family: icomoon !important;
    font-size: 24px
}

.mobile-header-active .header-search {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(223, 231, 246, 1);
    border-radius: 3px
}

.desktop .mobile-header-active .header-search.focused,
.mobile-header-active .header-search.focused:hover {
    border-color: rgba(13, 82, 214, 1)
}

.mobile-header-active .header-search>.search-button::before {
    content: '\f002' !important;
    font-family: icomoon !important;
    font-size: 20px;
    color: rgba(223, 231, 246, 1);
    top: -1px
}

.desktop .mobile-header-active .header-search>.search-button:hover::before {
    color: rgba(255, 255, 255, 1) !important
}

.mobile-header-active .header-search .search-button {
    background: rgba(13, 82, 214, 1);
    min-width: 40px
}

.desktop .mobile-header-active .header-search .search-button:hover {
    background: rgba(15, 58, 141, 1)
}

.mobile-header-active #search input::-webkit-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

.mobile-header-active #search input::-moz-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

.mobile-header-active #search input:-ms-input-placeholder {
    color: rgba(105, 105, 115, 1)
}

.mobile-header-active .search-categories {
    background: rgba(13, 82, 214, 1)
}

.desktop .mobile-header-active .search-categories:hover {
    background: rgba(15, 58, 141, 1)
}

.mobile-header-active .search-categories-button,
.mobile-header-active .search-categories-button>a {
    color: rgba(223, 231, 246, 1)
}

.desktop .mobile-header-active .search-categories:hover .search-categories-button {
    color: rgba(255, 255, 255, 1)
}

.mobile-header-active .search-categories-button::after {
    content: '\f0d7' !important;
    font-family: icomoon !important;
    top: 1px
}

.mobile-header-active .search-categories.drop-menu>.j-dropdown {
    left: 0;
    right: auto;
    transform: translate3d(0, -10px, 0)
}

.mobile-header-active .search-categories.drop-menu.animating>.j-dropdown {
    left: 0;
    right: auto;
    transform: none
}

.mobile-header-active .search-categories.drop-menu>.j-dropdown::before {
    left: 10px;
    right: auto;
    transform: translateX(0)
}

.mobile-header-active .search-categories.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.mobile-header-active .search-categories.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.mobile-header-active .search-categories.dropdown .j-menu .dropdown>a::after {
    display: block
}

.mobile-header-active .search-categories.dropdown .j-menu>li>a {
    font-size: 14px;
    color: rgba(58, 71, 84, 1);
    font-weight: 400;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 15px
}

.mobile-header-active .search-categories.dropdown .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.mobile-header-active .search-categories.dropdown .j-menu>li>a::before {
    margin-right: 7px;
    min-width: 20px;
    font-size: 18px
}

.desktop .mobile-header-active .search-categories.dropdown .j-menu>li:hover>a,
.mobile-header-active .search-categories.dropdown .j-menu>li.active>a {
    background: rgba(240, 242, 245, 1)
}

.mobile-header-active .search-categories.dropdown .j-menu>li>a,
.mobile-header-active .search-categories.dropdown.accordion-menu .menu-item>a+div,
.mobile-header-active .search-categories.dropdown .accordion-menu .menu-item>a+div {
    border-style: none
}

.mobile-header-active .search-categories.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.mobile-header-active .search-categories.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 200px
}

.mobile-header-active .search-categories.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.mobile-header-active .search-categories.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: 7px;
    margin-top: -10px
}

.mobile-header-active .search-categories .j-menu::before {
    margin-top: -10px
}

.mobile-header-active .tt-menu>div {
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.mobile-header-active .tt-menu:not(.tt-empty)::before {
    display: block;
    margin-top: -10px
}

.mobile-header-active .search-result .product-name {
    font-weight: 700
}

.mobile-header-active .search-result>a>span {
    justify-content: flex-start
}

.mobile-header-active .search-result.view-more a::after {
    content: '\e5c8' !important;
    font-family: icomoon !important
}

.mobile-header-active .mini-search #search .search-trigger {
    width: 50px
}

.mobile-header-active .mobile-1 #search .header-search {
    padding: 8px
}

.mobile-header-active .mobile-search-group {
    padding: 8px
}

.mobile-header-active .mobile-3 .mobile-search-wrapper {
    padding: 0 8px
}

.mobile-header-active #search .header-search {
    height: 60px
}

.mobile-header-active .mobile-search-group,
.mobile-header-active .mobile-1 .header-search {
    background: rgba(240, 242, 245, 1);
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.mobile-header-active .mobile-1 #search>.dropdown-menu::before {
    display: none;
    margin-left: -60px;
    margin-top: -10px
}

.mobile-header-active .mobile-header .mobile-top-bar {
    display: flex;
    height: 40px;
    padding-right: 7px;
    padding-left: 7px;
    background: rgba(13, 82, 214, 1);
    justify-content: space-between
}

.mobile-header-active .top-menu .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    padding: 5px
}

.mobile-header-active .top-menu .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.mobile-header-active .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.mobile-header-active .top-menu .j-menu .dropdown>a::after {
    display: block
}

.desktop .mobile-header-active .top-menu .j-menu>li:hover>a,
.mobile-header-active .top-menu .j-menu>li.active>a {
    color: rgba(13, 82, 214, 1)
}

.mobile-header-active .top-menu .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.mobile-header-active .top-menu .j-menu>li>a::before {
    margin-right: 5px;
    font-size: 14px
}

.mobile-header-active .top-menu .j-menu>li+li {
    margin-left: 5px
}

.mobile-header-active .top-menu .j-menu a .count-badge {
    display: inline-flex;
    position: relative
}

.mobile-header-active .top-menu.drop-menu>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, -10px, 0)
}

.mobile-header-active .top-menu.drop-menu.animating>.j-dropdown {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.mobile-header-active .top-menu.drop-menu>.j-dropdown::before {
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.mobile-header-active .top-menu.dropdown .j-menu>li>a {
    flex-direction: row;
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    background: rgba(15, 58, 141, 1);
    padding: 10px;
    padding-right: 15px;
    padding-left: 15px
}

.mobile-header-active .top-menu.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.mobile-header-active .top-menu.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.mobile-header-active .top-menu.dropdown .j-menu .dropdown>a::after {
    display: block
}

.mobile-header-active .top-menu.dropdown .j-menu .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.mobile-header-active .top-menu.dropdown .j-menu>li>a::before {
    color: rgba(255, 255, 255, 1);
    margin: 0px;
    margin-right: 5px;
    font-size: 15px
}

.desktop .mobile-header-active .top-menu.dropdown .j-menu>li:hover>a::before,
.mobile-header-active .top-menu.dropdown .j-menu>li.active>a::before {
    color: rgba(255, 255, 255, 1)
}

.desktop .mobile-header-active .top-menu.dropdown .j-menu>li:hover>a,
.mobile-header-active .top-menu.dropdown .j-menu>li.active>a {
    background: rgba(13, 82, 214, 1)
}

.mobile-header-active .top-menu.dropdown .j-menu>li+li {
    margin-left: 0px
}

.mobile-header-active .top-menu.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.mobile-header-active .top-menu.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 100px
}

.mobile-header-active .top-menu.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2);
    border-radius: 3px
}

.mobile-header-active .top-menu.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(15, 58, 141, 1);
    margin-left: -2px;
    margin-top: -10px
}

@media (max-width: 1024px) {
    .mobile-header-active.mobile-header-active .mobile-container {
        width: 40%;
        width: 40%
    }

    .mobile-header-active .language .dropdown-toggle>span,
    .mobile-header-active .language .dropdown::after {
        font-size: 11px;
        color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .currency .dropdown-toggle>span,
    .mobile-header-active .currency .dropdown::after {
        font-size: 11px;
        color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .top-menu .j-menu>li>a {
        font-size: 12px;
        color: rgba(255, 255, 255, 1)
    }
}

@media (max-width: 760px) {
    .mobile-header-active.mobile-header-active .mobile-container {
        width: 85%;
        width: 85%
    }
}

/*No top bar not over*/

/*No top bar over*/


/*Top bar not over*/

/*Top bar over*/

/*Title before breadcrumbs*/



/*Shipping payment visibility*/

/*Site overlay offset*/
@media only screen and (max-width: 1280px) {
    .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
        transform: none !important;
    }
}


@font-face {
    font-family: 'icomoon';
    src: url('catalog/view/theme/journal3/icons/fonts/icomoon86e1.woff2?v=907f30d557') format('woff2'), url('catalog/view/theme/journal3/icons/fonts/icomoon86e1.woff?v=907f30d557') format('woff'), url('catalog/view/theme/journal3/icons/fonts/icomoon86e1.ttf?v=907f30d557') format('truetype'), url('catalog/view/theme/journal3/icons/fonts/icomoon86e1.svg?v=907f30d557') format('svg');
    font-weight: normal;
    font-style: normal;
    font-display: block
}

.icon {
    font-family: 'icomoon' !important;
    speak: never;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.product-label-default.product-label-270 {
    display: flex;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-270 {
    display: block;
    margin: 20px;
    top: 0;
    left: 0;
    right: initial;
    bottom: initial;
    transform: translate3d(-130px, 8px, 0) rotate(-45deg)
}

.product-label-diagonal.product-label-270>b {
    transform: scale(calc(10 / 10))
}

.product-label-270 b {
    background: rgba(15, 58, 141, 1)
}

.product-info .product-label-diagonal.product-label-270>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-28 {
    display: flex;
    margin-top: 5px;
    margin-right: 5px;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-28 {
    display: block
}

.product-label-diagonal.product-label-28>b {
    transform: scale(calc(10 / 10))
}

.product-label-28 {
    order: 0
}

.product-label-28 b {
    background: rgba(221, 14, 28, 1)
}

.product-info .product-label-diagonal.product-label-28>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-29 {
    display: flex;
    margin-top: 5px;
    margin-right: 5px;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-29 {
    display: block
}

.product-label-diagonal.product-label-29>b {
    transform: scale(calc(10 / 10))
}

.product-label-29 b {
    background: rgba(13, 82, 214, 1)
}

.product-info .product-label-diagonal.product-label-29>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-30 {
    display: flex;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-30 {
    display: block;
    margin: 20px;
    top: 0;
    left: 0;
    right: initial;
    bottom: initial;
    transform: translate3d(-130px, 8px, 0) rotate(-45deg)
}

.product-label-diagonal.product-label-30>b {
    transform: scale(calc(10 / 10))
}

.product-label-30 b {
    background: rgba(221, 14, 28, 1)
}

.product-info .product-label-diagonal.product-label-30>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-31 {
    display: flex;
    margin-top: 5px;
    margin-right: 5px;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-31 {
    display: block
}

.product-label-diagonal.product-label-31>b {
    transform: scale(calc(10 / 10))
}

.product-label-31 b {
    color: rgba(51, 51, 51, 1);
    background: rgba(254, 212, 48, 1)
}

.product-info .product-label-diagonal.product-label-31>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-133 {
    display: flex;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-133 {
    display: block;
    top: 0;
    left: 0;
    right: initial;
    bottom: initial;
    transform: translate3d(-130px, 8px, 0) rotate(-45deg)
}

.product-label-diagonal.product-label-133>b {
    transform: scale(calc(10 / 10))
}

.product-label-133 b {
    background: rgba(80, 173, 85, 1)
}

.product-info .product-label-diagonal.product-label-133>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-146 {
    display: flex;
    margin: 5px;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-146 {
    display: block;
    margin: 20px;
    top: 0;
    left: 0;
    right: initial;
    bottom: initial;
    transform: translate3d(-130px, 8px, 0) rotate(-45deg)
}

.product-label-diagonal.product-label-146>b {
    transform: scale(calc(10 / 10))
}

.product-label-146 {
    order: -1
}

.product-info .product-label-diagonal.product-label-146>b {
    transform: scale(calc(10 / 10))
}

.product-label-default.product-label-217 {
    display: flex;
    margin-top: 5px;
    margin-right: 5px;
    position: relative;
    top: 0;
    right: 0;
    bottom: initial;
    left: initial;
    justify-content: flex-end
}

.product-label-diagonal.product-label-217 {
    display: block
}

.product-label-diagonal.product-label-217>b {
    transform: scale(calc(10 / 10))
}

.product-label-217 b {
    font-size: 11px;
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(13, 82, 214, 1);
    border-radius: 3px;
    padding: 5px;
    padding-bottom: 6px;
    background: rgba(233, 102, 49, 1)
}

.product-label-217.product-label-default b {
    min-width: 45px
}

.product-label-217 {
    order: 1
}

.product-info .product-label-diagonal.product-label-217>b {
    transform: scale(calc(10 / 10))
}

.btn-extra-46::before {
    content: '\eaaf' !important;
    font-family: icomoon !important
}

.btn-extra-93::before {
    content: '\f29c' !important;
    font-family: icomoon !important
}

#content .product-blocks-58 {
    margin-top: 10px;
    margin-bottom: 30px
}

.grid-row-top-1 {
    background: rgba(255, 255, 255, 1);
    padding: 20px
}

.grid-row-top-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-top-1 .wave-top {
    display: block
}

.grid-row-top-1 .wave-bottom {
    display: block
}

.grid-col-top-1-1 {
    width: 75%;
    padding-right: 20px
}

.grid-col-top-1-1 .grid-item {
    height: auto
}

.grid-col-top-1-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 760px) {
    .grid-col-top-1-1 {
        width: 100%;
        padding-right: 0px;
        padding-bottom: 20px
    }
}

.grid-item-top-1-1-1 {
    width: 100%
}

.grid-col-top-1-2 {
    width: 25%
}

.grid-col-top-1-2 .grid-item {
    height: auto
}

.grid-col-top-1-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 760px) {
    .grid-col-top-1-2 {
        width: 100%
    }
}

.grid-item-top-1-2-1 {
    width: 100%
}

.grid-row-top-2 {
    background: rgba(58, 71, 84, 1)
}

.grid-row-top-2::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-top-2 .wave-top {
    display: block
}

.grid-row-top-2 .wave-bottom {
    display: block
}

.grid-col-top-2-1 {
    width: 100%
}

.grid-col-top-2-1 .grid-item {
    height: auto
}

.grid-col-top-2-1 .grid-items {
    justify-content: flex-start
}

.grid-item-top-2-1-1 {
    width: 100%
}

.grid-row-top-3 {
    background: rgba(255, 255, 255, 1);
    padding: 20px;
    padding-top: 30px;
    padding-bottom: 40px
}

.grid-row-top-3::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-top-3 .wave-top {
    display: block
}

.grid-row-top-3 .wave-bottom {
    display: block
}

.grid-col-top-3-1 {
    width: 100%;
    margin-top: 20px;
    margin-bottom: 50px
}

.grid-col-top-3-1 .grid-item {
    height: auto
}

.grid-item-top-3-1-1 {
    width: 100%
}

.grid-col-top-3-2 {
    width: 100%
}

.grid-col-top-3-2 .grid-item {
    height: auto
}

.grid-col-top-3-2 .grid-items {
    justify-content: flex-start
}

.grid-item-top-3-2-1 {
    width: 100%
}

.grid-row-top-4::before {
    display: block;
    background: rgba(255, 255, 255, 1);
    left: 0;
    width: 100vw
}

.grid-row-top-4 {
    padding: 20px;
    padding-top: 40px;
    padding-bottom: 40px
}

.grid-row-top-4 .wave-top {
    display: block
}

.grid-row-top-4 .wave-bottom {
    display: block
}

.grid-col-top-4-1 {
    width: 100%;
    margin-bottom: 50px
}

.grid-col-top-4-1 .grid-item {
    height: auto
}

.grid-col-top-4-1 .grid-items {
    justify-content: flex-start
}

.grid-item-top-4-1-1 {
    width: 100%
}

.grid-col-top-4-2 {
    width: 100%
}

.grid-col-top-4-2 .grid-item {
    height: auto
}

.grid-col-top-4-2 .grid-items {
    justify-content: flex-start
}

.grid-item-top-4-2-1 {
    width: 100%
}

.grid-col-top-4-3 {
    width: 100%;
    margin-top: 30px
}

.grid-col-top-4-3 .grid-item {
    height: auto
}

.grid-col-top-4-3 .grid-items {
    justify-content: flex-start
}

.grid-item-top-4-3-1 {
    width: 100%
}

.grid-row-bottom-1 {
    background: rgba(240, 242, 245, 1);
    padding: 15px;
    padding-top: 50px;
    padding-bottom: 60px
}

.grid-row-bottom-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-bottom-1 .wave-top {
    display: block
}

.grid-row-bottom-1 .wave-bottom {
    display: block
}

@media (max-width: 760px) {
    .grid-row-bottom-1 {
        padding: 0px
    }
}

.grid-col-bottom-1-1 {
    width: 100%;
    margin-bottom: 60px
}

.grid-col-bottom-1-1 .grid-item {
    height: auto
}

.grid-col-bottom-1-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1300px) {
    .grid-col-bottom-1-1 {
        padding: 20px
    }
}

@media (max-width: 760px) {
    .grid-col-bottom-1-1 {
        margin-bottom: 0px
    }
}

.grid-item-bottom-1-1-1 {
    width: 100%
}

.grid-col-bottom-1-2 {
    width: 20%;
    background: rgba(215, 218, 222, 1);
    padding: 20px;
    margin-bottom: 20px
}

.grid-col-bottom-1-2 .grid-item {
    height: auto
}

.grid-col-bottom-1-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 760px) {
    .grid-col-bottom-1-2 {
        width: 100%;
        margin-bottom: 0px
    }
}

.grid-item-bottom-1-2-1 {
    width: 100%
}

.grid-col-bottom-1-3 {
    width: 80%;
    background: rgba(255, 255, 255, 1);
    padding: 20px;
    padding-bottom: 0px;
    margin-bottom: 20px
}

.grid-col-bottom-1-3 .grid-item {
    height: auto
}

.grid-col-bottom-1-3 .grid-items {
    justify-content: flex-start
}

@media (max-width: 760px) {
    .grid-col-bottom-1-3 {
        width: 100%;
        margin-bottom: 0px
    }
}

.grid-item-bottom-1-3-1 {
    width: 100%
}

.grid-row-bottom-2 {
    background: rgba(255, 255, 255, 1);
    padding: 20px;
    padding-top: 50px;
    padding-bottom: 50px
}

.grid-row-bottom-2::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-bottom-2 .wave-top {
    display: block
}

.grid-row-bottom-2 .wave-bottom {
    display: block
}

.grid-col-bottom-2-1 {
    width: 100%
}

.grid-col-bottom-2-1 .grid-item {
    height: auto
}

.grid-col-bottom-2-1 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-2-1-1 {
    width: 100%
}

.grid-col-bottom-2-2 {
    width: 100%
}

.grid-col-bottom-2-2 .grid-item {
    height: auto
}

.grid-col-bottom-2-2 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-2-2-1 {
    width: 100%
}

.grid-row-bottom-3 {
    background: rgba(58, 71, 84, 1);
    padding: 20px;
    padding-top: 50px;
    padding-bottom: 60px
}

.grid-row-bottom-3::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-bottom-3 .wave-top {
    display: block
}

.grid-row-bottom-3 .wave-bottom {
    display: block
}

.grid-col-bottom-3-1 {
    width: 100%;
    margin-bottom: 40px
}

.grid-col-bottom-3-1 .grid-item {
    height: auto
}

.grid-col-bottom-3-1 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-3-1-1 {
    width: 100%
}

.grid-col-bottom-3-2 {
    width: 100%
}

.grid-col-bottom-3-2 .grid-item {
    height: auto
}

.grid-col-bottom-3-2 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-3-2-1 {
    width: 100%
}

.grid-row-bottom-4::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-bottom-4 {
    padding: 20px;
    padding-top: 40px;
    padding-bottom: 40px
}

.grid-row-bottom-4 .wave-top {
    display: block
}

.grid-row-bottom-4 .wave-bottom {
    display: block
}

@media (max-width: 760px) {
    .grid-row-bottom-4 {
        padding: 20px
    }
}

.grid-col-bottom-4-1 {
    width: 100%;
    margin-bottom: 40px
}

.grid-col-bottom-4-1 .grid-item {
    height: auto
}

.grid-col-bottom-4-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 760px) {
    .grid-col-bottom-4-1 {
        margin-bottom: 15px
    }
}

.grid-item-bottom-4-1-1 {
    width: 100%
}

.grid-col-bottom-4-2 {
    width: 100%
}

.grid-col-bottom-4-2 .grid-item {
    height: auto
}

.grid-col-bottom-4-2 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-4-2-1 {
    width: 100%
}

.grid-row-bottom-5 {
    background: rgba(255, 255, 255, 1);
    padding: 20px;
    padding-top: 30px;
    padding-bottom: 30px
}

.grid-row-bottom-5::before {
    display: block;
    left: 0;
    width: 100vw
}

.grid-row-bottom-5 .wave-top {
    display: block
}

.grid-row-bottom-5 .wave-bottom {
    display: block
}

.grid-col-bottom-5-1 {
    width: 100%;
    padding-top: 20px
}

.grid-col-bottom-5-1 .grid-item {
    height: auto
}

.grid-col-bottom-5-1 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-5-1-1 {
    width: 100%
}

.grid-col-bottom-5-2 {
    width: 100%
}

.grid-col-bottom-5-2 .grid-item {
    height: auto
}

.grid-col-bottom-5-2 .grid-items {
    justify-content: flex-start
}

.grid-item-bottom-5-2-1 {
    width: 100%
}

.module-master_slider-26 .ms-view {
    overflow: hidden
}

.module-master_slider-26 .ms-slide,
.module-master_slider-26 .ms-container,
.module-master_slider-26,
.module-master_slider-26::before,
.module-master_slider-26 .ms-slide-bgcont {
    border-radius: 10px
}

.module-master_slider-26 .static-text-1 {
    top: 0;
    left: 0;
    right: auto;
    bottom: auto;
    transform: none
}

.module-master_slider-26 .static-text-1 span {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .static-text-2 {
    top: auto;
    left: 0;
    right: auto;
    bottom: 0;
    transform: translate3d(0, 0, 0)
}

.module-master_slider-26 .static-text-2 span {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider>img {
    width: 100%
}

.desktop .module-master_slider-26 .ms-nav-next {
    opacity: 0
}

.desktop .module-master_slider-26 .ms-nav-prev {
    opacity: 0
}

.desktop .module-master_slider-26 .ms-container:hover .ms-nav-next {
    opacity: 1
}

.desktop .module-master_slider-26 .ms-container:hover .ms-nav-prev {
    opacity: 1
}

.module-master_slider-26 .ms-nav-next {
    display: flex;
    left: auto;
    right: 0;
    top: 50%;
    bottom: auto;
    transform: translateY(-100%)
}

.module-master_slider-26 .ms-nav-prev {
    display: flex;
    left: auto;
    right: 0;
    top: 50%;
    bottom: auto;
    transform: translateY(0)
}

.module-master_slider-26 .ms-nav-next::before,
.module-master_slider-26 .ms-nav-prev::before {
    content: '\e9b1' !important;
    font-family: icomoon !important
}

.desktop .module-master_slider-26 .ms-nav-next:hover::before,
.desktop .module-master_slider-26 .ms-nav-prev:hover::before {
    color: rgba(255, 255, 255, 1)
}

.module-master_slider-26 .ms-nav-next,
.module-master_slider-26 .ms-nav-prev {
    width: 40px;
    height: 40px
}

.module-master_slider-26 .ms-nav-next:hover,
.module-master_slider-26 .ms-nav-prev:hover {
    background: rgba(15, 58, 141, 1)
}

.module-master_slider-26 .ms-bullets {
    display: block;
    top: auto;
    bottom: 0;
    left: 0;
    right: auto;
    transform: none;
    margin-left: 40px;
    margin-right: 40px;
    margin-top: 30px;
    margin-bottom: 30px
}

.module-master_slider-26 .ms-bullets .ms-bullets-count {
    flex-direction: row
}

.module-master_slider-26 .ms-bullets .ms-bullet {
    margin: calc(8px / 2) !important;
    background: rgba(139, 145, 152, 1);
    border-radius: 10px
}

.module-master_slider-26 .ms-bullet {
    width: 15px;
    height: 5px
}

.desktop .module-master_slider-26 .ms-bullets .ms-bullet:hover,
.module-master_slider-26 .ms-bullets .ms-bullet-selected {
    background: rgba(233, 102, 49, 1)
}

.module-master_slider-26 .ms-thumb-list {
    display: block;
    padding: 10px 0;
    top: auto !important;
    bottom: 0 !important;
    order: 2
}

.module-master_slider-26 .ms-thumb-list .ms-thumb-frame {
    margin-right: 10px !important;
    opacity: .75
}

.module-master_slider-26 .ms-thumb-frame {
    border-width: 0px
}

.module-master_slider-26 .ms-timerbar {
    display: block;
    top: 0 !important;
    bottom: auto !important
}

.module-master_slider-26 .master-slider .ms-time-bar {
    height: 3px !important
}

@media (max-width: 1300px) {
    .module-master_slider-26 .ms-bullets {
        margin-left: 30px;
        margin-right: 30px
    }
}

@media (max-width: 1024px) {
    .module-master_slider-26 .ms-nav-next {
        display: none
    }

    .module-master_slider-26 .ms-nav-prev {
        display: none
    }

    .module-master_slider-26 .ms-bullets {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px
    }
}

@media (max-width: 760px) {
    .module-master_slider-26 .ms-bullets {
        margin-left: 12px;
        margin-right: 12px;
        margin-top: 10px;
        margin-bottom: 10px
    }

    .module-master_slider-26 .ms-bullet {
        height: 3px
    }
}

.module-master_slider-26 .module-item-1 .module-subitem-1.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-1 .module-subitem-1 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-1 .module-subitem-1.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-1 .module-subitem-1.ms-caption {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(13, 82, 214, 1);
    padding: 8px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 3px
}

.module-master_slider-26 .module-item-1 .module-subitem-1.ms-layer-shape {
    width: 50px;
    height: 6px;
    background: rgba(233, 102, 49, 1)
}

.module-master_slider-26 .module-item-1 .module-subitem-1.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 470px) {
    .module-master_slider-26 .module-item-1 .module-subitem-1.ms-layer-text {
        margin-top: -2% !important
    }

    .module-master_slider-26 .module-item-1 .module-subitem-1.ms-caption {
        font-size: 18px
    }
}

.module-master_slider-26 .module-item-1 .module-subitem-2.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-1 .module-subitem-2 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-1 .module-subitem-2.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-1 .module-subitem-2.ms-caption {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 40px;
    color: rgba(51, 51, 51, 1);
    line-height: 1.1
}

.module-master_slider-26 .module-item-1 .module-subitem-2.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-1 .module-subitem-2.ms-layer-text {
        margin-top: -1% !important
    }
}

.module-master_slider-26 .module-item-1 .module-subitem-3.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-1 .module-subitem-3 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-1 .module-subitem-3.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: top left
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn::after {
    content: '\e9b1' !important;
    font-family: icomoon !important;
    margin-left: 10px
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn,
.module-master_slider-26 .module-item-1 .module-subitem-3.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn:active,
.module-master_slider-26 .module-item-1 .module-subitem-3.btn:hover:active,
.module-master_slider-26 .module-item-1 .module-subitem-3.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn:hover,
.module-master_slider-26 .module-item-1 .module-subitem-3.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-master_slider-26 .module-item-1 .module-subitem-3.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-1 .module-subitem-3.btn.btn.disabled::after {
    font-size: 20px
}

.module-master_slider-26 .module-item-1 .module-subitem-3.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-1 .module-subitem-3.ms-layer-button {
        transform: scale(calc(130 / 100))
    }

    .module-master_slider-26 .module-item-1 .module-subitem-3.btn::after {
        margin-left: 5px
    }

    .module-master_slider-26 .module-item-1 .module-subitem-3.btn {
        border-width: 1px
    }
}

.module-master_slider-26 .module-item-2 .module-subitem-1.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-2 .module-subitem-1 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-2 .module-subitem-1.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-2 .module-subitem-1.ms-caption {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(13, 82, 214, 1);
    padding: 8px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 3px
}

.module-master_slider-26 .module-item-2 .module-subitem-1.ms-layer-shape {
    width: 50px;
    height: 6px;
    background: rgba(233, 102, 49, 1)
}

.module-master_slider-26 .module-item-2 .module-subitem-1.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 470px) {
    .module-master_slider-26 .module-item-2 .module-subitem-1.ms-layer-text {
        margin-top: -2% !important
    }

    .module-master_slider-26 .module-item-2 .module-subitem-1.ms-caption {
        font-size: 18px
    }
}

.module-master_slider-26 .module-item-2 .module-subitem-2.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-2 .module-subitem-2 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-2 .module-subitem-2.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-2 .module-subitem-2.ms-caption {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 40px;
    color: rgba(51, 51, 51, 1);
    line-height: 1.1
}

.module-master_slider-26 .module-item-2 .module-subitem-2.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-2 .module-subitem-2.ms-layer-text {
        margin-top: -1% !important
    }
}

.module-master_slider-26 .module-item-2 .module-subitem-3.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-2 .module-subitem-3 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-2 .module-subitem-3.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: top left
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn::after {
    content: '\e9b1' !important;
    font-family: icomoon !important;
    margin-left: 10px
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn,
.module-master_slider-26 .module-item-2 .module-subitem-3.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn:active,
.module-master_slider-26 .module-item-2 .module-subitem-3.btn:hover:active,
.module-master_slider-26 .module-item-2 .module-subitem-3.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn:hover,
.module-master_slider-26 .module-item-2 .module-subitem-3.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-master_slider-26 .module-item-2 .module-subitem-3.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-2 .module-subitem-3.btn.btn.disabled::after {
    font-size: 20px
}

.module-master_slider-26 .module-item-2 .module-subitem-3.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-2 .module-subitem-3.ms-layer-button {
        transform: scale(calc(130 / 100))
    }

    .module-master_slider-26 .module-item-2 .module-subitem-3.btn::after {
        margin-left: 5px
    }

    .module-master_slider-26 .module-item-2 .module-subitem-3.btn {
        border-width: 1px
    }
}

.module-master_slider-26 .module-item-3 .module-subitem-1.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-3 .module-subitem-1 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-3 .module-subitem-1.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-3 .module-subitem-1.ms-caption {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(13, 82, 214, 1);
    padding: 8px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 3px
}

.module-master_slider-26 .module-item-3 .module-subitem-1.ms-layer-shape {
    width: 50px;
    height: 6px;
    background: rgba(233, 102, 49, 1)
}

.module-master_slider-26 .module-item-3 .module-subitem-1.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 470px) {
    .module-master_slider-26 .module-item-3 .module-subitem-1.ms-layer-text {
        margin-top: -2% !important
    }

    .module-master_slider-26 .module-item-3 .module-subitem-1.ms-caption {
        font-size: 18px
    }
}

.module-master_slider-26 .module-item-3 .module-subitem-2.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-3 .module-subitem-2 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-3 .module-subitem-2.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-master_slider-26 .module-item-3 .module-subitem-2.ms-caption {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 40px;
    color: rgba(51, 51, 51, 1);
    line-height: 1.1
}

.module-master_slider-26 .module-item-3 .module-subitem-2.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-3 .module-subitem-2.ms-layer-text {
        margin-top: -1% !important
    }
}

.module-master_slider-26 .module-item-3 .module-subitem-3.ms-layer-hotspot .ms-point-center {
    width: 20px;
    height: 20px
}

.module-master_slider-26 .module-item-3 .module-subitem-3 {
    display: block;
    visibility: visible !important
}

.module-master_slider-26 .module-item-3 .module-subitem-3.ms-layer-button {
    transform: scale(calc(100 / 100));
    transform-origin: top left
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn::after {
    content: '\e9b1' !important;
    font-family: icomoon !important;
    margin-left: 10px
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn,
.module-master_slider-26 .module-item-3 .module-subitem-3.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn:active,
.module-master_slider-26 .module-item-3 .module-subitem-3.btn:hover:active,
.module-master_slider-26 .module-item-3 .module-subitem-3.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn:hover,
.module-master_slider-26 .module-item-3 .module-subitem-3.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-master_slider-26 .module-item-3 .module-subitem-3.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-master_slider-26 .module-item-3 .module-subitem-3.btn.btn.disabled::after {
    font-size: 20px
}

.module-master_slider-26 .module-item-3 .module-subitem-3.ms-layer-video {
    width: 400px;
    height: 225px
}

@media (max-width: 760px) {
    .module-master_slider-26 .module-item-3 .module-subitem-3.ms-layer-button {
        transform: scale(calc(130 / 100))
    }

    .module-master_slider-26 .module-item-3 .module-subitem-3.btn::after {
        margin-left: 5px
    }

    .module-master_slider-26 .module-item-3 .module-subitem-3.btn {
        border-width: 1px
    }
}

.module-banners-259 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.module-banners-259 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-banners-259 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-banners-259 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-banners-259 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-banners-259 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-banners-259 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-banners-259 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-banners-259:not(.carousel-mode) .module-body {
    margin: -10px
}

.module-banners-259 a img {
    transform: scale(1)
}

.module-banners-259 .module-item>a {
    background: rgba(240, 242, 245, 1);
    border-radius: 10px
}

.module-banners-259 .module-item>a::before {
    background: rgba(15, 58, 141, 0.15)
}

.module-banners-259 a::before {
    opacity: 0
}

.desktop .module-banners-259 a:hover::before {
    opacity: 1
}

.module-banners-259 a::after {
    opacity: 1;
    margin: 10px;
    margin-top: 5px
}

.module-banners-259 .module-item>a::after {
    top: 0;
    left: 0;
    right: auto;
    bottom: auto;
    transform: translate3d(0, 0, 0)
}

.module-banners-259 a .banner-caption {
    visibility: visible;
    opacity: 1;
    display: block;
    width: auto
}

.module-banners-259 .banner-caption {
    top: 50%;
    left: 0;
    right: auto;
    bottom: auto;
    transform: translate3d(0, -50%, 0)
}

.module-banners-259 .banner-caption span {
    transform: scale(calc(100 / 100));
    transform-origin: left center;
    max-width: 38%;
    white-space: normal;
    ;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 18px;
    color: rgba(51, 51, 51, 1);
    margin-left: 25px
}

.module-banners-259 .banner-caption span s {
    display: block;
    color: rgba(13, 82, 214, 1);
    text-transform: uppercase;
    margin-bottom: 5px
}

.module-banners-259 a .banner-caption-2 {
    visibility: visible;
    opacity: 1;
    display: block;
    width: auto
}

.module-banners-259 .banner-caption-2 {
    top: auto;
    left: 0;
    right: auto;
    bottom: 0;
    transform: translate3d(0, 0, 0)
}

.module-banners-259 .banner-caption-2 span {
    transform: scale(calc(100 / 100));
    transform-origin: bottom left;
    white-space: normal
}

.module-banners-259 .banner-caption-3 span {
    white-space: normal
}

@media (max-width: 1024px) {
    .module-banners-259 .banner-caption span {
        max-width: 50%
    }

    .module-banners-259 .banner-caption span s {
        margin-bottom: 3px
    }
}

@media (max-width: 980px) {
    .module-banners-259 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .module-banners-259 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .module-banners-259 .banner-caption span {
        font-size: 11px;
        margin-left: 10px
    }
}

@media (max-width: 760px) {
    .module-banners-259 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-banners-259 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 359px) {
    .module-banners-259 .banner-caption span {
        font-size: 10px
    }
}

.module-info_blocks-86 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 3 * 0px) / 4 - 0.01px)
}

.module-info_blocks-86 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-info_blocks-86 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-info_blocks-86 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-info_blocks-86 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-info_blocks-86 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-info_blocks-86 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-info_blocks-86 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-info_blocks-86 .info-block .info-block-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 15px;
    color: rgba(230, 230, 230, 1);
    display: block
}

.module-info_blocks-86 .info-block .info-block-text {
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    font-weight: 400;
    line-height: 1.3;
    display: block
}

.module-info_blocks-86 .info-block {
    padding: 25px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    text-align: left
}

.module-info_blocks-86 .info-block-content {
    display: flex
}

.module-info_blocks-86 .info-block::before {
    align-self: center;
    width: 60px;
    height: 60px;
    font-size: 30px;
    color: rgba(233, 102, 49, 1)
}

.module-info_blocks-86 .info-block-img {
    align-self: center
}

.module-info_blocks-86 .info-block::before,
.module-info_blocks-86 .info-block-img {
    margin-right: 15px;
    border-width: 2px;
    border-style: solid;
    border-color: rgba(13, 82, 214, 1);
    border-radius: 50%
}

.module-info_blocks-86 .info-block .count-badge {
    display: none
}

@media (max-width: 1024px) {
    .module-info_blocks-86 .module-item.swiper-slide {
        margin-right: 0px;
        width: calc((100% - 1 * 0px) / 2 - 0.01px)
    }

    .module-info_blocks-86 .module-item:not(.swiper-slide) {
        padding: 0px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 980px) {
    .module-info_blocks-86 .info-block {
        padding: 15px
    }
}

@media (max-width: 470px) {
    .module-info_blocks-86 .info-block .info-block-title {
        font-size: 13px
    }

    .module-info_blocks-86 .info-block .info-block-text {
        font-size: 11px;
        display: block
    }

    .module-info_blocks-86 .info-block::before {
        width: 35px;
        height: 35px;
        font-size: 17px
    }

    .module-info_blocks-86 .info-block::before,
    .module-info_blocks-86 .info-block-img {
        margin-right: 8px
    }
}

.module-info_blocks-86 .module-item-1 .info-block::before {
    content: '\eab9' !important;
    font-family: icomoon !important
}

.module-info_blocks-86 .module-item-2 .info-block::before {
    content: '\f112' !important;
    font-family: icomoon !important
}

.module-info_blocks-86 .module-item-3 .info-block::before {
    content: '\e980' !important;
    font-family: icomoon !important
}

.module-info_blocks-86 .module-item-4 .info-block::before {
    content: '\eb15' !important;
    font-family: icomoon !important
}

.module-title-147 {
    text-align: center
}

.module-title-147 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-147 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-147 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-147 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-147 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-147 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-147 .title-wrapper {
        text-align: left
    }

    .module-title-147 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-147 h3 {
        font-size: 20px
    }
}

.module-categories-37 .category-thumb .image {
    display: block;
    width: 100%
}

.module-categories-37 .category-thumb .image a {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 7px;
    box-shadow: 0 5px 50px -10px rgba(0, 0, 0, 0.05)
}

.desktop .module-categories-37 .category-thumb:hover .image a {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-categories-37 .category-thumb:hover .image img {
    transform: scale(1.13)
}

.module-categories-37 .category-thumb {
    flex-direction: column
}

.module-categories-37 .category-thumb .caption {
    flex: 1 0 auto
}

.module-categories-37 .post-thumb .caption {
    flex-basis: 150px
}

.module-categories-37 .category-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    left: 50%;
    right: auto;
    transform: translate(-50%, -100%);
    ;
    position: absolute;
    ;
    background: rgba(240, 242, 245, 1);
    padding: 5px;
    padding-right: 10px;
    padding-left: 10px;
    margin: 10px;
    margin-top: -10px;
    border-radius: 4px
}

.module-categories-37 .category-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 13px;
    color: rgba(51, 51, 51, 1);
    text-align: center;
    text-transform: uppercase
}

.module-categories-37 .category-thumb .description {
    display: none
}

.module-categories-37 .category-thumb .button-group {
    display: none;
    justify-content: flex-end;
    margin-top: 10px
}

.module-categories-37 .category-thumb .btn-view-more::before {
    display: inline-block
}

.module-categories-37 .category-thumb .btn-view-more::after {
    display: inline-block
}

.module-categories-37 .category-thumb .btn-view-more .btn-text {
    display: inline-block
}

.module-categories-37 .category-thumb .btn-view-more {
    width: auto
}

.module-categories-37 .category-thumb .btn-view-more.btn,
.module-categories-37 .category-thumb .btn-view-more.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-categories-37 .category-thumb .btn-view-more.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-categories-37 .category-thumb .btn-view-more.btn:active,
.module-categories-37 .category-thumb .btn-view-more.btn:hover:active,
.module-categories-37 .category-thumb .btn-view-more.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-categories-37 .category-thumb .btn-view-more.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-categories-37 .category-thumb .btn-view-more.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-categories-37 .category-thumb .btn-view-more.btn:hover {
    box-shadow: none
}

.module-categories-37 .category-thumb .btn-view-more.btn.btn.disabled::after {
    font-size: 20px
}

.module-categories-37 .swiper-container {
    overflow: hidden
}

.module-categories-37 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-categories-37:hover .swiper-buttons {
    display: block
}

.module-categories-37 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-categories-37 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-categories-37 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-categories-37 .swiper-button-disabled {
    opacity: 0
}

.module-categories-37 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-categories-37 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-categories-37 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-categories-37 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-categories-37 .swiper {
    padding-bottom: 15px
}

.module-categories-37 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-categories-37 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-categories-37 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-categories-37 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-categories-37 .swiper-pagination>span {
    border-radius: 50px
}

.module-categories-37 .panel-group .panel-heading a::before {
    content: '\f067' !important;
    font-family: icomoon !important;
    margin-right: 3px;
    order: 10
}

.desktop .module-categories-37 .panel-group .panel-heading:hover a::before {
    color: rgba(13, 82, 214, 1)
}

.module-categories-37 .panel-group .panel-active .panel-heading a::before {
    content: '\f068' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1)
}

.module-categories-37 .panel-group .panel-heading a {
    justify-content: space-between;
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    padding: 15px;
    padding-right: 5px;
    padding-left: 0px
}

.module-categories-37 .panel-group .panel-heading:hover a {
    color: rgba(13, 82, 214, 1)
}

.module-categories-37 .panel-group .panel-active .panel-heading:hover a,
.module-categories-37 .panel-group .panel-active .panel-heading a {
    color: rgba(15, 58, 141, 1)
}

.module-categories-37 .panel-group .panel-heading {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-categories-37 .panel-group .panel:first-child .panel-heading {
    border-width: 0px
}

.module-categories-37 .panel-group .panel-body {
    padding-bottom: 20px
}

.module-categories-37 .nav-tabs>li>a,
.module-categories-37 .nav-tabs>li.active>a,
.module-categories-37 .nav-tabs>li.active>a:hover,
.module-categories-37 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase
}

.desktop .module-categories-37 .nav-tabs>li:hover>a,
.module-categories-37 .nav-tabs>li.active>a {
    color: rgba(255, 255, 255, 1)
}

.module-categories-37 .nav-tabs>li.active>a,
.module-categories-37 .nav-tabs>li.active>a:hover,
.module-categories-37 .nav-tabs>li.active>a:focus {
    color: rgba(255, 255, 255, 1)
}

.module-categories-37 .nav-tabs>li>a,
.module-categories-37 .nav-tabs>li:hover>a,
.module-categories-37 .nav-tabs>li.active>a,
.module-categories-37 .nav-tabs>li.active>a,
.module-categories-37 .nav-tabs>li.active>a:hover,
.module-categories-37 .nav-tabs>li.active>a:focus {
    background: rgba(238, 238, 238, 1) !important
}

.desktop .module-categories-37 .nav-tabs>li:hover>a {
    background: rgba(13, 82, 214, 1) !important
}

.module-categories-37 ul.nav-tabs>li.active>a,
.module-categories-37 ul.nav-tabs>li.active>a:hover,
.module-categories-37 ul.nav-tabs>li.active>a:focus {
    background: rgba(13, 82, 214, 1) !important
}

.module-categories-37 .nav-tabs>li {
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    flex-grow: 0
}

.module-categories-37 .nav-tabs>li.active::after {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    left: 50%;
    top: 100%;
    transform: translate(-50%, 0);
    border-top-color: rgba(13, 82, 214, 1);
    border-top-width: 10px
}

.module-categories-37 .nav-tabs>li>a {
    justify-content: center;
    white-space: normal;
    padding: 15px;
    padding-top: 11px;
    padding-bottom: 12px
}

.module-categories-37 .nav-tabs {
    border-radius: 3px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    overflow-x: visible;
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-categories-37 .nav-tabs>li:not(:last-child) {
    margin-right: 0px
}

.module-categories-37 .mobile .nav-tabs {
    overflow-x: visible
}

.module-categories-37 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: initial;
    height: 1px;
    height: 5px;
    width: 5px
}

.module-categories-37 .nav-tabs::-webkit-scrollbar-track {
    background-color: white
}

.module-categories-37 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999
}

.module-categories-37 .tab-container::before {
    display: none
}

.module-categories-37 .tab-container {
    display: block
}

.module-categories-37 .tab-container .nav-tabs {
    flex-direction: row
}

.module-categories-37 .category-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 4 * 20px) / 5 - 0.01px)
}

.module-categories-37 .category-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 5 - 0.01px)
}

.one-column #content .module-categories-37 .category-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.one-column #content .module-categories-37 .category-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.two-column #content .module-categories-37 .category-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.two-column #content .module-categories-37 .category-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.side-column .module-categories-37 .category-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.side-column .module-categories-37 .category-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

@media (max-width: 1024px) {
    .module-categories-37 .swiper-buttons {
        display: none !important
    }

    .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
    }
}

@media (max-width: 980px) {
    .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

@media (max-width: 760px) {
    .module-categories-37 .swiper-container {
        overflow: visible
    }

    .module-categories-37 .nav-tabs>li>a,
    .module-categories-37 .nav-tabs>li.active>a,
    .module-categories-37 .nav-tabs>li.active>a:hover,
    .module-categories-37 .nav-tabs>li.active>a:focus {
        font-size: 12px
    }

    .module-categories-37 .nav-tabs {
        display: flex;
        justify-content: flex-start
    }

    .module-categories-37 .nav-tabs>li {
        flex-grow: 1
    }
}

@media (max-width: 470px) {
    .module-categories-37 .nav-tabs>li {
        border-style: none;
        width: calc(100% / 2)
    }

    .module-categories-37 .nav-tabs>li:first-child {
        border-width: 0;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-style: solid;
        border-color: rgba(226, 226, 226, 1)
    }

    .module-categories-37 .nav-tabs {
        border-radius: 0px
    }

    .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .two-column #content .module-categories-37 .category-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .two-column #content .module-categories-37 .category-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

.module-title-145 {
    text-align: center
}

.module-title-145 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-145 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-145 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-145 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-145 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-145 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-145 .title-wrapper {
        text-align: left
    }

    .module-title-145 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-145 h3 {
        font-size: 20px
    }
}

.module-products-27 .swiper-container {
    overflow: hidden;
    padding: 20px;
    padding-top: 0px
}

.module-products-27 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-products-27:hover .swiper-buttons {
    display: block
}

.module-products-27 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-products-27 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-products-27 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-products-27 .swiper-button-disabled {
    opacity: 0
}

.module-products-27 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-27 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-27 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-products-27 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-products-27 .swiper {
    padding-bottom: 15px
}

.module-products-27 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-products-27 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-products-27 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-products-27 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-products-27 .swiper-pagination>span {
    border-radius: 50px
}

.module-products-27 .panel-group .panel-heading a::before {
    content: '\f067' !important;
    font-family: icomoon !important;
    margin-right: 3px;
    order: 10
}

.desktop .module-products-27 .panel-group .panel-heading:hover a::before {
    color: rgba(13, 82, 214, 1)
}

.module-products-27 .panel-group .panel-active .panel-heading a::before {
    content: '\f068' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1)
}

.module-products-27 .panel-group .panel-heading a {
    justify-content: space-between;
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    padding: 15px;
    padding-right: 5px;
    padding-left: 0px
}

.module-products-27 .panel-group .panel-heading:hover a {
    color: rgba(13, 82, 214, 1)
}

.module-products-27 .panel-group .panel-active .panel-heading:hover a,
.module-products-27 .panel-group .panel-active .panel-heading a {
    color: rgba(15, 58, 141, 1)
}

.module-products-27 .panel-group .panel-heading {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-27 .panel-group .panel:first-child .panel-heading {
    border-width: 0px
}

.module-products-27 .panel-group .panel-body {
    padding-bottom: 20px
}

.module-products-27 .nav-tabs>li>a,
.module-products-27 .nav-tabs>li.active>a,
.module-products-27 .nav-tabs>li.active>a:hover,
.module-products-27 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase
}

.desktop .module-products-27 .nav-tabs>li:hover>a,
.module-products-27 .nav-tabs>li.active>a {
    color: rgba(255, 255, 255, 1)
}

.module-products-27 .nav-tabs>li.active>a,
.module-products-27 .nav-tabs>li.active>a:hover,
.module-products-27 .nav-tabs>li.active>a:focus {
    color: rgba(255, 255, 255, 1)
}

.module-products-27 .nav-tabs>li>a,
.module-products-27 .nav-tabs>li:hover>a,
.module-products-27 .nav-tabs>li.active>a,
.module-products-27 .nav-tabs>li.active>a,
.module-products-27 .nav-tabs>li.active>a:hover,
.module-products-27 .nav-tabs>li.active>a:focus {
    background: rgba(238, 238, 238, 1) !important
}

.desktop .module-products-27 .nav-tabs>li:hover>a {
    background: rgba(13, 82, 214, 1) !important
}

.module-products-27 ul.nav-tabs>li.active>a,
.module-products-27 ul.nav-tabs>li.active>a:hover,
.module-products-27 ul.nav-tabs>li.active>a:focus {
    background: rgba(13, 82, 214, 1) !important
}

.module-products-27 .nav-tabs>li {
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    flex-grow: 0
}

.module-products-27 .nav-tabs>li.active::after {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    left: 50%;
    top: 100%;
    transform: translate(-50%, 0);
    border-top-color: rgba(13, 82, 214, 1);
    border-top-width: 10px
}

.module-products-27 .nav-tabs>li>a {
    justify-content: center;
    white-space: normal;
    padding: 15px;
    padding-top: 11px;
    padding-bottom: 12px
}

.module-products-27 .nav-tabs {
    border-radius: 3px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    overflow-x: visible;
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-products-27 .nav-tabs>li:not(:last-child) {
    margin-right: 0px
}

.module-products-27 .mobile .nav-tabs {
    overflow-x: visible
}

.module-products-27 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: initial;
    height: 1px;
    height: 5px;
    width: 5px
}

.module-products-27 .nav-tabs::-webkit-scrollbar-track {
    background-color: white
}

.module-products-27 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999
}

.module-products-27 .tab-container::before {
    display: none
}

.module-products-27 .tab-container {
    display: block
}

.module-products-27 .tab-container .nav-tabs {
    flex-direction: row
}

.module-products-27 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.module-products-27 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-products-27 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .module-products-27 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-products-27 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .module-products-27 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .module-products-27 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.side-column .module-products-27 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

.module-products-27 .module-body>.module-item {
    margin-bottom: 20px
}

.module-products-27:not(.carousel-mode) .module-body .module-item>div {
    margin: -10px
}

.module-products-27 .product-grid .product-thumb {
    background: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 7px
}

.desktop .module-products-27 .product-grid .product-thumb:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-grid .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-27 .product-grid .product-thumb .image img {
    background: rgba(238, 238, 238, 1)
}

.module-products-27 .product-grid .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-27 .product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px);
    margin-right: 5px;
    margin-bottom: 5px
}

.module-products-27 .product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.module-products-27 .product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-27 .product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-27 .product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 16px
}

.module-products-27 .product-grid .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    font-family: 'Montserrat';
    font-weight: 400;
    font-size: 15px;
    color: rgba(51, 51, 51, 1);
    background: rgba(240, 242, 245, 1);
    border-radius: 3px;
    width: 90%;
    bottom: 35px
}

.module-products-27 .product-grid .product-thumb .countdown div span {
    color: rgba(105, 105, 115, 1)
}

.module-products-27 .product-grid .product-thumb .countdown>div {
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-27 .product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-27 .product-grid .product-thumb .stats {
    display: flex;
    justify-content: space-between;
    position: relative;
    transform: none;
    width: initial;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    background: rgba(240, 242, 245, 1);
    padding: 9px
}

.module-products-27 .product-grid .product-thumb .name {
    order: initial;
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    padding-left: 10px;
    margin-top: 15px
}

.module-products-27 .product-grid .product-thumb .stats a {
    color: rgba(139, 145, 152, 1)
}

.module-products-27 .product-grid .product-thumb .stats a:hover {
    color: rgba(233, 102, 49, 1)
}

.module-products-27 .product-grid .stat-1 .stats-label {
    display: none
}

.module-products-27 .product-grid .stat-2 .stats-label {
    display: none
}

.module-products-27 .product-grid .product-thumb .stats .stat-1 {
    padding-right: 5px;
    padding-left: 5px
}

.module-products-27 .product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: visible;
    opacity: 1;
    top: 0
}

.module-products-27 .product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.module-products-27 .product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.module-products-27 .product-grid .product-thumb .rating.no-rating {
    display: none
}

.module-products-27 .product-grid .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-products-27 .product-grid .product-thumb .rating .fa-star,
.module-products-27 .product-grid .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-products-27 .product-grid .product-thumb .rating-stars {
    padding: 5px;
    margin-top: -5px
}

.module-products-27 .product-grid .product-thumb .rating.no-rating span {
    opacity: 0.3
}

.module-products-27 .product-grid .product-thumb .name a {
    white-space: normal;
    overflow: visible;
    text-overflow: initial;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 16px;
    color: rgba(51, 51, 51, 1);
    text-align: left
}

.module-products-27 .product-grid .product-thumb .description {
    display: none;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    margin-top: 10px
}

.module-products-27 .product-grid .product-thumb .price {
    display: block;
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    padding-left: 10px;
    margin-top: 5px;
    margin-bottom: 15px
}

.module-products-27 .product-grid .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    text-align: center
}

.module-products-27 .product-grid .product-thumb .price-old {
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    font-weight: 400;
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-27 .product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-27 .product-grid .product-thumb .price-new {
    margin: 0 7px 0 0;
    order: 1
}

.module-products-27 .product-grid .product-thumb .buttons-wrapper {
    display: block
}

.module-products-27 .product-grid .product-thumb .button-group {
    justify-content: space-between
}

.module-products-27 .product-grid.product-grid .product-thumb .button-group {
    padding-bottom: 15px;
    padding-left: 10px
}

.module-products-27 .product-grid .product-thumb .cart-group {
    display: inline-flex
}

.module-products-27 .product-grid .product-thumb .btn-wishlist {
    width: 40px;
    height: 40px;
    display: inline-flex
}

.module-products-27 .product-grid .product-thumb .btn-compare {
    width: 40px;
    height: 40px;
    display: inline-flex
}

.module-products-27 .product-grid .product-thumb .btn-cart::before {
    display: none;
    font-size: 17px
}

.module-products-27 .product-grid .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0
}

.module-products-27 .product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-27 .product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn,
.module-products-27 .product-grid .product-thumb .btn-cart.btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn:active,
.module-products-27 .product-grid .product-thumb .btn-cart.btn:hover:active,
.module-products-27 .product-grid .product-thumb .btn-cart.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important;
    padding: 10px !important
}

.desktop .module-products-27 .product-grid .product-thumb .btn-cart.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-grid .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    height: 33px
}

.module-products-27 .product-grid .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.module-products-27 .product-grid .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.module-products-27 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.module-products-27 .product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.module-products-27 .product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 20px;
    color: rgba(139, 145, 152, 1)
}

.module-products-27 .product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.desktop .module-products-27 .product-grid .product-thumb .btn-wishlist:hover::before {
    color: rgba(13, 82, 214, 1)
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn,
.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:active,
.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:hover:active,
.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-27 .product-grid .product-thumb .btn-wishlist.btn:hover {
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 18px;
    color: rgba(139, 145, 152, 1)
}

.module-products-27 .product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.desktop .module-products-27 .product-grid .product-thumb .btn-compare:hover::before {
    color: rgba(13, 82, 214, 1)
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn,
.module-products-27 .product-grid .product-thumb .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn:active,
.module-products-27 .product-grid .product-thumb .btn-compare.btn:hover:active,
.module-products-27 .product-grid .product-thumb .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-27 .product-grid .product-thumb .btn-compare.btn:hover {
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-grid .product-thumb .extra-group {
    display: block
}

.module-products-27 .product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-27 .product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-27 .product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 14px;
    color: rgba(80, 173, 85, 1)
}

.module-products-27 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 14px;
    color: rgba(221, 14, 28, 1)
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-27 .product-grid .product-layout .extra-group>div {
    justify-content: space-between
}

.module-products-27 .product-grid .product-thumb .extra-group>div {
    background: rgba(240, 242, 245, 1);
    padding: 9px
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn,
.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:active,
.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-27 .product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn,
.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-27 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-27 .product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-27 .product-grid.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-27 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-27 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-27 .product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: center
}

.module-products-27 .product-grid .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

.module-products-27 .product-list .product-thumb {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding-bottom: 25px
}

.module-products-27 .product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
    margin-top: 25px
}

.module-products-27 .product-list .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-27 .product-list .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-27 .product-list .product-thumb .product-img img {
    border-radius: 5px
}

.module-products-27 .product-list .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-27 .product-list .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-27 .product-list .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.module-products-27 .product-list .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-27 .product-list .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-27 .product-list .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.module-products-27 .product-list .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    bottom: 10px
}

.module-products-27 .product-list.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-27 .product-list .product-thumb .caption {
    padding-left: 20px
}

.module-products-27 .product-list .product-thumb .stats {
    display: flex;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-27 .product-list .stat-1 .stats-label {
    display: inline-block
}

.module-products-27 .product-list .stat-2 .stats-label {
    display: inline-block
}

.module-products-27 .product-list.product-grid .product-thumb .rating {
    position: static;
    visibility: visible;
    opacity: 1
}

.module-products-27 .product-list .product-thumb .rating {
    justify-content: flex-end;
    margin-bottom: 5px;
    display: flex
}

.module-products-27 .product-list .product-thumb .rating.no-rating {
    display: none
}

.module-products-27 .product-list .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-products-27 .product-list .product-thumb .rating .fa-star,
.module-products-27 .product-list .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-products-27 .product-list .product-thumb .rating-stars {
    margin-top: -18px
}

.module-products-27 .product-list .product-thumb .rating.no-rating span {
    opacity: .3
}

.module-products-27 .product-list .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 5px
}

.module-products-27 .product-list .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 22px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    text-align: left
}

.module-products-27 .product-list .product-thumb .description {
    display: block;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    line-height: 1.5;
    margin-top: 5px;
    margin-bottom: 10px
}

.module-products-27 .product-list .product-thumb .price {
    display: block;
    font-family: 'Roboto';
    font-weight: 700;
    font-size: 22px;
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-27 .product-list .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1)
}

.module-products-27 .product-list .product-thumb .price-new {
    color: rgba(233, 102, 49, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-27 .product-list .product-thumb .price-old {
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-27 .product-list .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-27 .product-list .product-thumb .buttons-wrapper {
    display: block
}

.module-products-27 .product-list .product-thumb .button-group {
    justify-content: flex-start
}

.module-products-27 .product-list.product-list .product-thumb .buttons-wrapper {
    margin-top: 5px
}

.module-products-27 .product-list .product-thumb .cart-group {
    display: inline-flex
}

.module-products-27 .product-list .product-thumb .btn-cart {
    height: 38px;
    margin-right: 5px
}

.module-products-27 .product-list .product-thumb .btn-wishlist {
    width: 38px;
    height: 38px;
    display: inline-flex
}

.module-products-27 .product-list .product-thumb .btn-compare {
    width: 38px;
    height: 38px;
    display: inline-flex;
    margin-left: 5px
}

.module-products-27 .product-list .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 16px
}

.module-products-27 .product-list .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-27 .product-list.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-27 .product-list.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-27 .product-list .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    height: 38px
}

.module-products-27 .product-list .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.module-products-27 .product-list .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.module-products-27 .product-list .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 16px
}

.module-products-27 .product-list .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn,
.module-products-27 .product-list .product-thumb .btn-wishlist.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn:active,
.module-products-27 .product-list .product-thumb .btn-wishlist.btn:hover:active,
.module-products-27 .product-list .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn:hover,
.module-products-27 .product-list .product-thumb .btn-wishlist.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-27 .product-list .product-thumb .btn-wishlist.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-list .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 16px
}

.module-products-27 .product-list .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-27 .product-list .product-thumb .btn-compare.btn,
.module-products-27 .product-list .product-thumb .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-27 .product-list .product-thumb .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-27 .product-list .product-thumb .btn-compare.btn:active,
.module-products-27 .product-list .product-thumb .btn-compare.btn:hover:active,
.module-products-27 .product-list .product-thumb .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-compare.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-27 .product-list .product-thumb .btn-compare.btn:hover,
.module-products-27 .product-list .product-thumb .btn-compare.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-27 .product-list .product-thumb .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-27 .product-list .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-list .product-thumb .extra-group {
    display: block
}

.module-products-27 .product-list .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-27 .product-list .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-27 .product-list .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.module-products-27 .product-list .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(221, 14, 28, 1)
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn {
    margin-left: 5px;
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.module-products-27 .product-list .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-27 .product-list .product-thumb .extra-group>div {
    margin-top: 10px
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn,
.module-products-27 .product-list .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn:active,
.module-products-27 .product-list .product-thumb .extra-group .btn.btn:hover:active,
.module-products-27 .product-list .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-27 .product-list .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn,
.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.desktop .module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-27 .product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-27 .product-list.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-27 .product-list.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-27 .product-list.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-27 .product-list.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-27 .product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-27 .product-list.product-grid .wish-group {
    justify-content: flex-start
}

.module-products-27 .product-list .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

@media (max-width: 1024px) {
    .module-products-27 .swiper-buttons {
        display: none !important
    }

    .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .module-products-27 .swiper-container {
        padding: 0px
    }

    .module-products-27 .product-grid .product-thumb .countdown {
        display: none
    }

    .module-products-27 .product-grid .product-thumb .price {
        font-size: 14px
    }

    .module-products-27 .product-grid .product-thumb .price-old {
        font-size: 13px
    }
}

@media (max-width: 980px) {
    .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 769px) {
    .module-products-27 .product-list .product-thumb .rating {
        justify-content: flex-start
    }

    .module-products-27 .product-list .product-thumb .rating-stars {
        margin-top: 0px
    }
}

@media (max-width: 760px) {
    .module-products-27 .swiper-container {
        overflow: visible
    }

    .module-products-27 .nav-tabs>li>a,
    .module-products-27 .nav-tabs>li.active>a,
    .module-products-27 .nav-tabs>li.active>a:hover,
    .module-products-27 .nav-tabs>li.active>a:focus {
        font-size: 12px
    }

    .module-products-27 .nav-tabs {
        display: flex;
        justify-content: flex-start
    }

    .module-products-27 .nav-tabs>li {
        flex-grow: 1
    }

    .module-products-27:not(.carousel-mode) .module-body .module-item>div {
        margin: -5px
    }

    .module-products-27 .product-grid .product-thumb .buttons-wrapper {
        display: block
    }

    .module-products-27 .product-grid .product-thumb .extra-group {
        display: none
    }

    .module-products-27 .product-list.product-list .product-layout .image {
        float: none;
        height: auto
    }

    .module-products-27 .product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
    }

    .module-products-27 .product-list .product-thumb .btn-wishlist.btn {
        border-width: 1px
    }

    .module-products-27 .product-list .product-thumb .btn-compare.btn {
        border-width: 1px
    }
}

@media (max-width: 470px) {
    .module-products-27 .nav-tabs>li {
        border-style: none;
        width: calc(100% / 2)
    }

    .module-products-27 .nav-tabs>li:first-child {
        border-width: 0;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-style: solid;
        border-color: rgba(226, 226, 226, 1)
    }

    .module-products-27 .nav-tabs {
        border-radius: 0px
    }

    .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .one-column #content .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-products-27 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .two-column #content .module-products-27 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .module-products-27 .product-grid .product-thumb .name a {
        font-size: 14px
    }

    .module-products-27 .product-grid .product-thumb .btn-cart .btn-text {
        display: none
    }

    .module-products-27 .product-grid .product-thumb .btn-cart::before {
        display: inline-block
    }

    .module-products-27 .product-grid .product-thumb .stepper {
        height: 37px
    }
}

.module-button-263 .btn {
    transform: scale(calc(100 / 100));
    transform-origin: center;
    width: auto;
    background: rgba(13, 82, 214, 1)
}

.module-button-263 {
    display: flex;
    justify-content: center
}

.module-button-263 .btn:hover {
    background: rgba(15, 58, 141, 1) !important
}

.module-button-263 .btn.btn.disabled::after {
    font-size: 20px
}

.module-button-263 .btn::after {
    content: '\e9b1' !important;
    font-family: icomoon !important;
    margin-left: 7px
}

.module-title-163 {
    text-align: center
}

.module-title-163 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-163 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-163 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-163 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-163 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-163 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-163 .title-wrapper {
        text-align: left
    }

    .module-title-163 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-163 h3 {
        font-size: 20px
    }
}

.module-catalog-166 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.module-catalog-166 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-catalog-166 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-catalog-166 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-catalog-166 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-catalog-166 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-catalog-166 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-catalog-166 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-catalog-166 .swiper-container {
    overflow: hidden
}

.module-catalog-166 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-catalog-166:hover .swiper-buttons {
    display: block
}

.module-catalog-166 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-catalog-166 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-catalog-166 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-catalog-166 .swiper-button-disabled {
    opacity: 0
}

.module-catalog-166 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-catalog-166 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-catalog-166 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-catalog-166 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-catalog-166 .swiper {
    padding-bottom: 15px
}

.module-catalog-166 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-catalog-166 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-catalog-166 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-catalog-166 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-catalog-166 .swiper-pagination>span {
    border-radius: 50px
}

.module-catalog-166 .catalog-title {
    padding-bottom: 8px;
    border-width: 0;
    border-bottom-width: 2px;
    border-style: solid;
    border-color: rgba(233, 102, 49, 1)
}

.module-catalog-166 .catalog-title {
    margin-bottom: 15px;
    display: flex;
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(51, 51, 51, 1);
    width: auto;
    margin-left: 0;
    margin-right: auto;
    justify-content: flex-start;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-catalog-166 .subitems {
    align-items: flex-start
}

.module-catalog-166 .subitem>a span {
    font-size: 14px;
    color: rgba(58, 71, 84, 1)
}

.module-catalog-166 .subitem>a:hover span {
    color: rgba(233, 102, 49, 1);
    text-decoration: underline
}

.module-catalog-166 .subitem.view-more a span {
    color: rgba(15, 58, 141, 1);
    font-weight: 700;
    text-decoration: underline
}

.module-catalog-166 .subitem.view-more a:hover span {
    color: rgba(233, 102, 49, 1)
}

.module-catalog-166 .subitem>a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-bottom: 6px
}

.module-catalog-166 .subitem>a::before {
    content: none !important
}

.module-catalog-166 .catalog-image img {
    border-radius: 3px
}

.module-catalog-166 .catalog-image {
    margin-bottom: 8px
}

.module-catalog-166 .item-assets {
    flex-direction: column
}

.module-catalog-166 .item-assets>a {
    max-width: 100%;
    order: 0
}

.module-catalog-166 .item-assets .subitems {
    width: 100%
}

.module-catalog-166 .item-assets .catalog-image {
    display: block
}

@media (max-width: 1024px) {
    .module-catalog-166 .swiper-buttons {
        display: none !important
    }
}

@media (max-width: 760px) {
    .module-catalog-166 .swiper-container {
        overflow: visible
    }

    .module-catalog-166 .subitem>a span {
        font-size: 17px
    }

    .module-catalog-166 .subitem>a {
        padding-bottom: 16px
    }
}

.module-products-169 .swiper-container {
    overflow: hidden
}

.module-products-169 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-products-169:hover .swiper-buttons {
    display: block
}

.module-products-169 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-products-169 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-products-169 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-products-169 .swiper-button-disabled {
    opacity: 0
}

.module-products-169 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-169 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-169 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-products-169 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-products-169 .swiper {
    padding-bottom: 15px
}

.module-products-169 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-products-169 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-products-169 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-products-169 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-products-169 .swiper-pagination>span {
    border-radius: 50px
}

.module-products-169 .nav-tabs>li>a,
.module-products-169 .nav-tabs>li.active>a,
.module-products-169 .nav-tabs>li.active>a:hover,
.module-products-169 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-products-169 .nav-tabs>li:hover>a,
.module-products-169 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-products-169 .nav-tabs>li.active>a,
.module-products-169 .nav-tabs>li.active>a:hover,
.module-products-169 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-products-169 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-products-169 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-products-169 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-products-169 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-products-169 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-products-169 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-products-169 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-products-169 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-products-169 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-products-169 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-products-169 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-products-169 .tab-container::before {
    display: none
}

.module-products-169 .tab-content {
    padding-top: 20px
}

.module-products-169 .tab-container {
    display: block
}

.module-products-169 .tab-container .nav-tabs {
    flex-direction: row
}

.module-products-169 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.module-products-169 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-products-169 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 2 * 0px) / 3 - 0.01px)
}

.one-column #content .module-products-169 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-products-169 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 2 * 0px) / 3 - 0.01px)
}

.two-column #content .module-products-169 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 3 - 0.01px)
}

.side-column .module-products-169 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-products-169 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-products-169 .module-body>.module-item {
    margin-bottom: 20px
}

.module-products-169 .product-grid .product-thumb {
    background: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    padding: 5px
}

.module-products-169 .product-grid .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-169 .product-grid .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-169 .product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-169 .product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 35px;
    height: 35px
}

.module-products-169 .product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-169 .product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-169 .product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 16px
}

.module-products-169 .product-grid .product-thumb .image .btn,
.module-products-169 .product-grid .product-thumb .image .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-169 .product-grid .product-thumb .image .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-169 .product-grid .product-thumb .image .btn:active,
.module-products-169 .product-grid .product-thumb .image .btn:hover:active,
.module-products-169 .product-grid .product-thumb .image .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-grid .product-thumb .image .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-grid .product-thumb .image .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .module-products-169 .product-grid .product-thumb .image .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-grid .product-thumb .image .btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid .product-thumb .countdown {
    display: none;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1)
}

.module-products-169 .product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-169 .product-grid .product-thumb .stats {
    display: none;
    justify-content: space-between;
    padding: 5px;
    padding-right: 8px;
    padding-bottom: 4px;
    padding-left: 8px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-169 .product-grid .stat-1 .stats-label {
    display: none
}

.module-products-169 .product-grid .stat-2 .stats-label {
    display: none
}

.module-products-169 .product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: hidden;
    opacity: 0;
    top: 0
}

.module-products-169 .product-grid.product-grid .product-thumb:hover .rating {
    visibility: visible;
    opacity: 1
}

.module-products-169 .product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.module-products-169 .product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.module-products-169 .product-grid .product-thumb .rating.no-rating {
    display: none
}

.module-products-169 .product-grid .product-thumb .rating .fa-stack {
    font-size: 10px;
    width: 1.1em
}

.module-products-169 .product-grid .product-thumb .rating-stars {
    padding-bottom: 10px
}

.module-products-169 .product-grid .product-thumb .rating.no-rating span {
    opacity: 0.5
}

.module-products-169 .product-grid .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    padding-top: 8px;
    padding-bottom: 5px;
    padding-left: 8px
}

.module-products-169 .product-grid .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    text-align: left;
    text-align: left
}

.module-products-169 .product-grid .product-thumb .description {
    display: none;
    padding: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-169 .product-grid .product-thumb .price {
    display: block;
    font-size: 15px;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    padding: 8px;
    padding-top: 0px
}

.module-products-169 .product-grid .product-thumb .price-tax {
    display: none;
    font-size: 12px;
    text-align: left
}

.module-products-169 .product-grid .product-thumb .price-old {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-169 .product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-169 .product-grid .product-thumb .price-new {
    margin: 0 7px 0 0;
    order: 1
}

.module-products-169 .product-grid .product-thumb .buttons-wrapper {
    display: block
}

.module-products-169 .product-grid .product-thumb .button-group {
    justify-content: space-between
}

.module-products-169 .product-grid.product-grid .product-thumb .button-group {
    padding: 8px;
    padding-bottom: 5px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-169 .product-grid .product-thumb .cart-group {
    display: inline-flex
}

.module-products-169 .product-grid .product-thumb .btn-wishlist {
    width: 35px;
    height: 35px;
    display: inline-flex;
    margin-right: 5px;
    margin-left: 5px
}

.module-products-169 .product-grid .product-thumb .btn-compare {
    width: 35px;
    height: 35px;
    display: inline-flex
}

.module-products-169 .product-grid .product-thumb .btn-cart::before {
    display: none;
    font-size: 16px;
    left: 2px;
    margin-right: 2px
}

.module-products-169 .product-grid .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0
}

.module-products-169 .product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-169 .product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-169 .product-grid .product-thumb .btn-cart.btn,
.module-products-169 .product-grid .product-thumb .btn-cart.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-169 .product-grid .product-thumb .btn-cart.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-169 .product-grid .product-thumb .btn-cart.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .btn-cart.btn:active,
.module-products-169 .product-grid .product-thumb .btn-cart.btn:hover:active,
.module-products-169 .product-grid .product-thumb .btn-cart.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .btn-cart.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid .product-thumb .stepper {
    display: none;
    margin-right: 5px;
    height: 36px
}

.module-products-169 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.module-products-169 .product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.module-products-169 .product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 15px
}

.module-products-169 .product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn,
.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:active,
.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:hover:active,
.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-169 .product-grid .product-thumb .btn-wishlist.btn:hover {
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 14px
}

.module-products-169 .product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn,
.module-products-169 .product-grid .product-thumb .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn:active,
.module-products-169 .product-grid .product-thumb .btn-compare.btn:hover:active,
.module-products-169 .product-grid .product-thumb .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-169 .product-grid .product-thumb .btn-compare.btn:hover {
    box-shadow: none
}

.module-products-169 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid .product-thumb .extra-group {
    display: none
}

.module-products-169 .product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-169 .product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-169 .product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block
}

.module-products-169 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-169 .product-grid .product-layout .extra-group>div {
    justify-content: space-between
}

.module-products-169 .product-grid .product-thumb .extra-group>div {
    padding: 4px
}

.module-products-169 .product-grid .product-thumb .extra-group .btn.btn,
.module-products-169 .product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-169 .product-grid .product-thumb .extra-group .btn.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-169 .product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn.btn:active,
.module-products-169 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
.module-products-169 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn,
.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-169 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-169 .product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-169 .product-grid.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-169 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-169 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-169 .product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: flex-start
}

.module-products-169 .product-grid .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

.module-products-169 .product-list .product-thumb {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding-bottom: 25px
}

.module-products-169 .product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
    margin-top: 25px
}

.module-products-169 .product-list .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-169 .product-list .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-169 .product-list .product-thumb .product-img img {
    border-radius: 5px
}

.module-products-169 .product-list .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-169 .product-list .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-169 .product-list .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.module-products-169 .product-list .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-169 .product-list .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-169 .product-list .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.module-products-169 .product-list .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    bottom: 10px
}

.module-products-169 .product-list.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-169 .product-list .product-thumb .caption {
    padding-left: 20px
}

.module-products-169 .product-list .product-thumb .stats {
    display: flex;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-169 .product-list .stat-1 .stats-label {
    display: inline-block
}

.module-products-169 .product-list .stat-2 .stats-label {
    display: inline-block
}

.module-products-169 .product-list.product-grid .product-thumb .rating {
    position: static;
    visibility: visible;
    opacity: 1
}

.module-products-169 .product-list .product-thumb .rating {
    justify-content: flex-end;
    margin-bottom: 5px;
    display: flex
}

.module-products-169 .product-list .product-thumb .rating.no-rating {
    display: none
}

.module-products-169 .product-list .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-products-169 .product-list .product-thumb .rating .fa-star,
.module-products-169 .product-list .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-products-169 .product-list .product-thumb .rating-stars {
    margin-top: -18px
}

.module-products-169 .product-list .product-thumb .rating.no-rating span {
    opacity: .3
}

.module-products-169 .product-list .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 5px
}

.module-products-169 .product-list .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 22px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    text-align: left
}

.module-products-169 .product-list .product-thumb .description {
    display: block;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    line-height: 1.5;
    margin-top: 5px;
    margin-bottom: 10px
}

.module-products-169 .product-list .product-thumb .price {
    display: block;
    font-family: 'Roboto';
    font-weight: 700;
    font-size: 22px;
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-169 .product-list .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1)
}

.module-products-169 .product-list .product-thumb .price-new {
    color: rgba(233, 102, 49, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-169 .product-list .product-thumb .price-old {
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-169 .product-list .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-169 .product-list .product-thumb .buttons-wrapper {
    display: block
}

.module-products-169 .product-list .product-thumb .button-group {
    justify-content: flex-start
}

.module-products-169 .product-list.product-list .product-thumb .buttons-wrapper {
    margin-top: 5px
}

.module-products-169 .product-list .product-thumb .cart-group {
    display: inline-flex
}

.module-products-169 .product-list .product-thumb .btn-cart {
    height: 38px;
    margin-right: 5px
}

.module-products-169 .product-list .product-thumb .btn-wishlist {
    width: 38px;
    height: 38px;
    display: inline-flex
}

.module-products-169 .product-list .product-thumb .btn-compare {
    width: 38px;
    height: 38px;
    display: inline-flex;
    margin-left: 5px
}

.module-products-169 .product-list .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 16px
}

.module-products-169 .product-list .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-169 .product-list.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-169 .product-list.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-169 .product-list .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    height: 38px
}

.module-products-169 .product-list .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.module-products-169 .product-list .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.module-products-169 .product-list .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 16px
}

.module-products-169 .product-list .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn,
.module-products-169 .product-list .product-thumb .btn-wishlist.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn:active,
.module-products-169 .product-list .product-thumb .btn-wishlist.btn:hover:active,
.module-products-169 .product-list .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn:hover,
.module-products-169 .product-list .product-thumb .btn-wishlist.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-169 .product-list .product-thumb .btn-wishlist.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-list .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 16px
}

.module-products-169 .product-list .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-169 .product-list .product-thumb .btn-compare.btn,
.module-products-169 .product-list .product-thumb .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-169 .product-list .product-thumb .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-169 .product-list .product-thumb .btn-compare.btn:active,
.module-products-169 .product-list .product-thumb .btn-compare.btn:hover:active,
.module-products-169 .product-list .product-thumb .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-compare.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-169 .product-list .product-thumb .btn-compare.btn:hover,
.module-products-169 .product-list .product-thumb .btn-compare.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-169 .product-list .product-thumb .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-169 .product-list .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-list .product-thumb .extra-group {
    display: block
}

.module-products-169 .product-list .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-169 .product-list .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-169 .product-list .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.module-products-169 .product-list .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(221, 14, 28, 1)
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn {
    margin-left: 5px;
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.module-products-169 .product-list .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-169 .product-list .product-thumb .extra-group>div {
    margin-top: 10px
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn,
.module-products-169 .product-list .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn:active,
.module-products-169 .product-list .product-thumb .extra-group .btn.btn:hover:active,
.module-products-169 .product-list .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-169 .product-list .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn,
.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.desktop .module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-169 .product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-169 .product-list.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-169 .product-list.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-169 .product-list.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-169 .product-list.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-169 .product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-169 .product-list.product-grid .wish-group {
    justify-content: flex-start
}

.module-products-169 .product-list .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

@media (max-width: 1024px) {
    .module-products-169 .swiper-buttons {
        display: none !important
    }

    .module-products-169 .product-grid .product-thumb .btn-quickview {
        visibility: visible;
        opacity: 1
    }
}

@media (max-width: 980px) {
    .module-products-169 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-products-169 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

@media (max-width: 769px) {
    .module-products-169 .product-list .product-thumb .rating {
        justify-content: flex-start
    }

    .module-products-169 .product-list .product-thumb .rating-stars {
        margin-top: 0px
    }
}

@media (max-width: 760px) {
    .module-products-169 .swiper-container {
        overflow: visible
    }

    .module-products-169 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
    }

    .module-products-169 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
    }

    .module-products-169 .product-list.product-list .product-layout .image {
        float: none;
        height: auto
    }

    .module-products-169 .product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
    }

    .module-products-169 .product-list .product-thumb .btn-wishlist.btn {
        border-width: 1px
    }

    .module-products-169 .product-list .product-thumb .btn-compare.btn {
        border-width: 1px
    }
}

.module-title-143 {
    text-align: center
}

.module-title-143 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-143 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-143 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-143 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-143 .title-wrapper h3 {
    text-align: center
}

.module-title-143 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-143 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-143 .title-wrapper {
        text-align: left
    }

    .module-title-143 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-143 h3 {
        font-size: 20px
    }
}

.module-manufacturers-38 .manufacturer-thumb .image {
    display: block
}

.module-manufacturers-38 .manufacturer-thumb .image a {
    padding: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 7px
}

.module-manufacturers-38 .manufacturer-thumb .image img {
    opacity: 0.7;
    filter: grayscale(1)
}

.module-manufacturers-38 .manufacturer-thumb:hover .image img {
    opacity: 1;
    transform: scale(1.15);
    filter: grayscale(0)
}

.module-manufacturers-38 .manufacturer-thumb .name {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: block;
    opacity: 0;
    transform: translate3d(0, 10px, 0);
    background: rgba(15, 58, 141, 1);
    padding: 3px
}

.module-manufacturers-38 .manufacturer-thumb:hover .name {
    opacity: 1;
    transform: translate3d(0, 0, 0)
}

.module-manufacturers-38 .manufacturer-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 12px;
    color: rgba(230, 230, 230, 1);
    font-weight: 700;
    text-align: center
}

.module-manufacturers-38 .swiper-container {
    overflow: hidden
}

.module-manufacturers-38 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-manufacturers-38:hover .swiper-buttons {
    display: block
}

.module-manufacturers-38 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-manufacturers-38 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-manufacturers-38 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-manufacturers-38 .swiper-button-disabled {
    opacity: 0
}

.module-manufacturers-38 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-manufacturers-38 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-manufacturers-38 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-manufacturers-38 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-manufacturers-38 .swiper {
    padding-bottom: 15px
}

.module-manufacturers-38 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-manufacturers-38 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-manufacturers-38 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-manufacturers-38 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-manufacturers-38 .swiper-pagination>span {
    border-radius: 50px
}

.module-manufacturers-38 .manufacturer-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 8 * 20px) / 9 - 0.01px)
}

.module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 9 - 0.01px)
}

.one-column #content .module-manufacturers-38 .manufacturer-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 6 * 20px) / 7 - 0.01px)
}

.one-column #content .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 7 - 0.01px)
}

.two-column #content .module-manufacturers-38 .manufacturer-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 4 * 20px) / 5 - 0.01px)
}

.two-column #content .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 5 - 0.01px)
}

.side-column .module-manufacturers-38 .manufacturer-layout.swiper-slide {
    margin-right: 10px;
    width: calc((100% - 2 * 10px) / 3 - 0.01px)
}

.side-column .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
    padding: 5px;
    width: calc(100% / 3 - 0.01px)
}

.module-manufacturers-38:not(.carousel-mode) .module-body>.module-item>.manufacturer-grid {
    margin: -10px
}

@media (max-width: 1024px) {
    .module-manufacturers-38 .manufacturer-thumb .image img {
        opacity: 1
    }

    .module-manufacturers-38 .manufacturer-thumb .name {
        display: none
    }

    .module-manufacturers-38 .swiper-buttons {
        display: none !important
    }

    .module-manufacturers-38 .manufacturer-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 5 * 20px) / 6 - 0.01px)
    }

    .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 6 - 0.01px)
    }

    .one-column #content .module-manufacturers-38 .manufacturer-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-manufacturers-38 .manufacturer-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

@media (max-width: 760px) {
    .module-manufacturers-38 .swiper-container {
        overflow: visible
    }

    .module-manufacturers-38 .manufacturer-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-manufacturers-38 .manufacturer-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .module-manufacturers-38 .manufacturer-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

@media (max-width: 470px) {
    .module-manufacturers-38 .manufacturer-thumb .image a {
        padding: 10px
    }
}

.module-title-171 {
    text-align: center
}

.module-title-171 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-171 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-171 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-171 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-171 .title-wrapper h3 {
    color: rgba(230, 230, 230, 1)
}

.module-title-171 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-171 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-171 .title-wrapper {
        text-align: left
    }

    .module-title-171 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-171 h3 {
        font-size: 20px
    }
}

.module-gallery-45 .swiper-container {
    overflow: hidden
}

.module-gallery-45 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-gallery-45:hover .swiper-buttons {
    display: block
}

.module-gallery-45 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-gallery-45 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-gallery-45 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-gallery-45 .swiper-button-disabled {
    opacity: 0
}

.module-gallery-45 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-gallery-45 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-gallery-45 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-gallery-45 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-gallery-45 .swiper {
    padding-bottom: 15px
}

.module-gallery-45 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-gallery-45 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-gallery-45 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-gallery-45 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-gallery-45 .swiper-pagination>span {
    border-radius: 50px
}

.module-gallery-45 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 8 * 20px) / 9 - 0.01px)
}

.module-gallery-45 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 9 - 0.01px)
}

.one-column #content .module-gallery-45 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 6 * 20px) / 7 - 0.01px)
}

.one-column #content .module-gallery-45 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 7 - 0.01px)
}

.two-column #content .module-gallery-45 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 4 * 20px) / 5 - 0.01px)
}

.two-column #content .module-gallery-45 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 5 - 0.01px)
}

.side-column .module-gallery-45 .module-item.swiper-slide {
    margin-right: 10px;
    width: calc((100% - 2 * 10px) / 3 - 0.01px)
}

.side-column .module-gallery-45 .module-item:not(.swiper-slide) {
    padding: 5px;
    width: calc(100% / 3 - 0.01px)
}

.module-gallery-45 .module-item>a::after {
    display: block;
    content: '\eba0' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-gallery-45 .module-item>a>span::before {
    display: none
}

.module-gallery-45 .module-item>a::before {
    background-color: rgba(52, 59, 151, 0.4)
}

.module-gallery-45 .module-item>a {
    border-radius: 7px
}

.module-gallery-45 .module-item>a:hover img {
    transform: scale(1.16)
}

.module-gallery-45 .gallery-image-caption {
    display: none
}

.lg-45.lg-backdrop {
    background: rgba(0, 0, 0, 0.85)
}

.lg-45 #lg-download {
    display: none
}

.lg-45 .lg-image {
    border-radius: 3px;
    max-height: calc(100% - 100px)
}

.lg-45 .lg-actions .lg-prev::before {
    content: '\e93e' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(230, 230, 230, 1);
    left: -10px
}

.desktop .lg-45 .lg-actions .lg-prev:hover::before {
    color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-actions .lg-next::before {
    content: '\e93f' !important;
    font-family: icomoon !important;
    font-size: 45px;
    color: rgba(230, 230, 230, 1);
    left: 10px
}

.desktop .lg-45 .lg-actions .lg-next:hover::before {
    color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-actions .lg-icon {
    background: none
}

.lg-45 .lg-toolbar {
    color: rgba(230, 230, 230, 1)
}

.lg-45 #lg-counter {
    display: inline-block
}

.lg-45 #lg-zoom-in {
    display: block
}

.lg-45 #lg-actual-size {
    display: block
}

.lg-45 #lg-download-in::after {
    content: '\eb4d' !important;
    font-family: icomoon !important
}

.lg-45 #lg-zoom-in::after {
    content: '\ebef' !important;
    font-family: icomoon !important
}

.lg-45 #lg-zoom-in:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-45 #lg-actual-size::after {
    content: '\ebf0' !important;
    font-family: icomoon !important
}

.lg-45 #lg-actual-size:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-close::after {
    content: '\ebeb' !important;
    font-family: icomoon !important
}

.desktop .lg-45 .lg-close:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-sub-html {
    font-size: 18px;
    color: rgba(230, 230, 230, 1);
    background: rgba(0, 0, 0, 0.6);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    top: auto;
    display: none
}

.lg-45.lg-thumb-open .lg-sub-html {
    bottom: 90px !important
}

.lg-45 .lg-thumb-item {
    margin-top: 10px;
    padding-right: 10px
}

.lg-45 .lg-thumb-item img {
    margin-bottom: 10px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    border-radius: 3px
}

.lg-45 .lg-thumb-outer {
    padding-left: 10px;
    background: rgba(17, 17, 17, 1)
}

.desktop .lg-45 .lg-thumb-item img:hover,
.lg-45 .lg-thumb-item.active img {
    border-color: rgba(233, 102, 49, 1)
}

.lg-45 div.lg-thumb-item.active img {
    border-color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-toogle-thumb::after {
    color: rgba(230, 230, 230, 1)
}

.desktop .lg-45 .lg-toogle-thumb:hover::after {
    color: rgba(233, 102, 49, 1)
}

.lg-45 .lg-toogle-thumb {
    background: rgba(17, 17, 17, 1);
    left: auto;
    right: 20px;
    transform: translateX(0)
}

.module-gallery-45 .module-body {
    justify-content: flex-start
}

.module-gallery-45 .open-btn {
    transform: scale(calc(100 / 100));
    transform-origin: top left
}

@media (max-width: 1024px) {
    .module-gallery-45 .swiper-buttons {
        display: none !important
    }

    .module-gallery-45 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 5 * 20px) / 6 - 0.01px)
    }

    .module-gallery-45 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 6 - 0.01px)
    }

    .one-column #content .module-gallery-45 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .module-gallery-45 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-gallery-45 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .module-gallery-45 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

@media (max-width: 760px) {
    .module-gallery-45 .swiper-container {
        overflow: visible
    }

    .module-gallery-45 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-gallery-45 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-gallery-45 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .module-gallery-45 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }
}

.module-gallery-45 .module-item-1>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-2>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-4>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-5>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-6>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-8>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-9>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-10>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-11>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-12>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-13>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-14>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-15>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-16>a>span::before {
    content: 'Image Caption'
}

.module-gallery-45 .module-item-17>a>span::before {
    content: 'Image Caption'
}

.module-title-162 {
    text-align: center
}

.module-title-162 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-162 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-162 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-162 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-162 .title-wrapper::before {
    opacity: .05
}

@media (max-width: 760px) {
    .module-title-162 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-162 .title-wrapper {
        text-align: left
    }

    .module-title-162 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-162 h3 {
        font-size: 20px
    }
}

.module-blog_posts-40 .swiper-container {
    overflow: hidden;
    padding: 20px;
    padding-top: 10px;
    padding-bottom: 30px
}

.module-blog_posts-40 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-blog_posts-40:hover .swiper-buttons {
    display: block
}

.module-blog_posts-40 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-blog_posts-40 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-blog_posts-40 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-blog_posts-40 .swiper-button-disabled {
    opacity: 0
}

.module-blog_posts-40 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-blog_posts-40 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-blog_posts-40 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-blog_posts-40 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-blog_posts-40 .swiper {
    padding-bottom: 15px
}

.module-blog_posts-40 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-blog_posts-40 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-blog_posts-40 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-blog_posts-40 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-blog_posts-40 .swiper-pagination>span {
    border-radius: 50px
}

.module-blog_posts-40 .nav-tabs>li>a,
.module-blog_posts-40 .nav-tabs>li.active>a,
.module-blog_posts-40 .nav-tabs>li.active>a:hover,
.module-blog_posts-40 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase
}

.desktop .module-blog_posts-40 .nav-tabs>li:hover>a,
.module-blog_posts-40 .nav-tabs>li.active>a {
    color: rgba(255, 255, 255, 1)
}

.module-blog_posts-40 .nav-tabs>li.active>a,
.module-blog_posts-40 .nav-tabs>li.active>a:hover,
.module-blog_posts-40 .nav-tabs>li.active>a:focus {
    color: rgba(255, 255, 255, 1)
}

.module-blog_posts-40 .nav-tabs>li>a,
.module-blog_posts-40 .nav-tabs>li:hover>a,
.module-blog_posts-40 .nav-tabs>li.active>a,
.module-blog_posts-40 .nav-tabs>li.active>a,
.module-blog_posts-40 .nav-tabs>li.active>a:hover,
.module-blog_posts-40 .nav-tabs>li.active>a:focus {
    background: rgba(238, 238, 238, 1) !important
}

.desktop .module-blog_posts-40 .nav-tabs>li:hover>a {
    background: rgba(13, 82, 214, 1) !important
}

.module-blog_posts-40 ul.nav-tabs>li.active>a,
.module-blog_posts-40 ul.nav-tabs>li.active>a:hover,
.module-blog_posts-40 ul.nav-tabs>li.active>a:focus {
    background: rgba(13, 82, 214, 1) !important
}

.module-blog_posts-40 .nav-tabs>li {
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    flex-grow: 0
}

.module-blog_posts-40 .nav-tabs>li.active::after {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    left: 50%;
    top: 100%;
    transform: translate(-50%, 0);
    border-top-color: rgba(13, 82, 214, 1);
    border-top-width: 10px
}

.module-blog_posts-40 .nav-tabs>li>a {
    justify-content: center;
    white-space: normal;
    padding: 15px;
    padding-top: 11px;
    padding-bottom: 12px
}

.module-blog_posts-40 .nav-tabs {
    border-radius: 3px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    overflow-x: visible;
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-blog_posts-40 .nav-tabs>li:not(:last-child) {
    margin-right: 0px
}

.module-blog_posts-40 .mobile .nav-tabs {
    overflow-x: visible
}

.module-blog_posts-40 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: initial;
    height: 1px;
    height: 5px;
    width: 5px
}

.module-blog_posts-40 .nav-tabs::-webkit-scrollbar-track {
    background-color: white
}

.module-blog_posts-40 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999
}

.module-blog_posts-40 .tab-container::before {
    display: none
}

.module-blog_posts-40 .tab-container {
    display: block
}

.module-blog_posts-40 .tab-container .nav-tabs {
    flex-direction: row
}

.module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
    margin-right: 10px;
    width: calc((100% - 0 * 10px) / 1 - 0.01px)
}

.side-column .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
    padding: 5px;
    width: calc(100% / 1 - 0.01px)
}

.module-blog_posts-40:not(.carousel-mode) .module-body>.module-item>.post-grid {
    margin: -10px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb {
    background: rgba(255, 255, 255, 1);
    border-radius: 7px
}

.desktop .module-blog_posts-40.module-blog_posts-grid .post-thumb:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb:hover .image img {
    transform: scale(1.15)
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .caption {
    position: relative;
    bottom: auto;
    width: auto
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 12px;
    margin-bottom: 12px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 18px;
    color: rgba(58, 71, 84, 1)
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .description {
    display: block;
    color: rgba(105, 105, 115, 1);
    text-align: center;
    padding-right: 15px;
    padding-left: 15px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .button-group {
    display: flex;
    justify-content: center;
    padding: 15px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more::before {
    display: inline-block
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more::after {
    display: inline-block;
    content: '\e5c8' !important;
    font-family: icomoon !important
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn,
.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:active,
.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:hover:active,
.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn:hover {
    box-shadow: none
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .btn-read-more.btn.btn.disabled::after {
    font-size: 20px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .post-stats {
    display: flex;
    justify-content: center;
    position: absolute;
    transform: translateY(-100%);
    width: 100%;
    background: rgba(240, 242, 245, 0.9);
    padding: 7px
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .post-stats .p-author {
    display: flex
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .image {
    display: block
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .p-date {
    display: flex
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .post-stats .p-comment {
    display: flex
}

.module-blog_posts-40.module-blog_posts-grid .post-thumb .post-stats .p-view {
    display: flex
}

@media (max-width: 1024px) {
    .module-blog_posts-40 .swiper-buttons {
        display: none !important
    }

    .module-blog_posts-40 .swiper-container {
        padding: 0px
    }
}

@media (max-width: 760px) {
    .module-blog_posts-40 .swiper-container {
        overflow: visible
    }

    .module-blog_posts-40 .nav-tabs>li>a,
    .module-blog_posts-40 .nav-tabs>li.active>a,
    .module-blog_posts-40 .nav-tabs>li.active>a:hover,
    .module-blog_posts-40 .nav-tabs>li.active>a:focus {
        font-size: 12px
    }

    .module-blog_posts-40 .nav-tabs {
        display: flex;
        justify-content: flex-start
    }

    .module-blog_posts-40 .nav-tabs>li {
        flex-grow: 1
    }

    .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 470px) {
    .module-blog_posts-40 .nav-tabs>li {
        border-style: none;
        width: calc(100% / 2)
    }

    .module-blog_posts-40 .nav-tabs>li:first-child {
        border-width: 0;
        border-bottom-width: 1px;
        border-left-width: 1px;
        border-style: solid;
        border-color: rgba(226, 226, 226, 1)
    }

    .module-blog_posts-40 .nav-tabs {
        border-radius: 0px
    }

    .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .one-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .two-column #content .module-blog_posts-40.module-blog_posts-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }
}

.module-title-281 {
    text-align: center
}

.module-title-281 .subtitle {
    display: inline-block;
    font-size: 16px;
    color: rgba(139, 145, 152, 1);
    max-width: 980px
}

.module-title-281 .title-divider {
    display: block;
    max-width: 50px;
    height: 2px;
    background: rgba(233, 102, 49, 1);
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
    margin-left: auto;
    margin-right: auto
}

.module-title-281 .title-wrapper {
    text-align: center;
    text-align: center
}

.module-title-281 h3 {
    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 30px
}

.module-title-281 .title-wrapper h3 {
    text-align: center
}

.module-title-281 .title-wrapper::before {
    opacity: .05;
    display: block
}

@media (max-width: 760px) {
    .module-title-281 .subtitle {
        display: inline-block;
        font-size: 14px
    }

    .module-title-281 .title-wrapper {
        text-align: left
    }

    .module-title-281 .title-divider {
        margin-left: 0;
        margin-right: auto
    }

    .module-title-281 h3 {
        font-size: 20px
    }
}

.module-testimonials-256 .swiper-container {
    overflow: hidden;
    padding: 25px
}

.module-testimonials-256 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-testimonials-256:hover .swiper-buttons {
    display: block
}

.module-testimonials-256 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-testimonials-256 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-testimonials-256 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-testimonials-256 .swiper-button-disabled {
    opacity: 0
}

.module-testimonials-256 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-testimonials-256 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-testimonials-256 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-testimonials-256 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-testimonials-256 .swiper {
    padding-bottom: 15px
}

.module-testimonials-256 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-testimonials-256 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-testimonials-256 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-testimonials-256 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-testimonials-256 .swiper-pagination>span {
    border-radius: 50px
}

.module-testimonials-256.blocks-grid .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.one-column #content .module-testimonials-256.blocks-grid .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-testimonials-256.blocks-grid .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .module-testimonials-256.blocks-grid .module-item.swiper-slide {
    margin-right: 10px;
    width: calc((100% - 0 * 10px) / 1 - 0.01px)
}

.side-column .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
    padding: 5px;
    width: calc(100% / 1 - 0.01px)
}

.module-testimonials-256 .title.module-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-testimonials-256 .title.module-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-testimonials-256 .title.module-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-testimonials-256 .title.module-title::after,
.module-testimonials-256 .title.module-title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.module-testimonials-256 .block-body {
    font-size: 16px;
    text-align: center;
    background: rgba(255, 255, 255, 1);
    padding: 20px;
    border-radius: 7px;
    font-size: 14px
}

.module-testimonials-256 .block-body:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-testimonials-256 .nav-tabs>li>a,
.module-testimonials-256 .nav-tabs>li.active>a,
.module-testimonials-256 .nav-tabs>li.active>a:hover,
.module-testimonials-256 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-testimonials-256 .nav-tabs>li:hover>a,
.module-testimonials-256 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-testimonials-256 .nav-tabs>li.active>a,
.module-testimonials-256 .nav-tabs>li.active>a:hover,
.module-testimonials-256 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-testimonials-256 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-testimonials-256 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-testimonials-256 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-testimonials-256 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-testimonials-256 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-testimonials-256 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-testimonials-256 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-testimonials-256 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-testimonials-256 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-testimonials-256 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-testimonials-256 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-testimonials-256 .tab-container::before {
    display: none
}

.module-testimonials-256 .tab-content {
    padding-top: 20px
}

.module-testimonials-256 .tab-container {
    display: block
}

.module-testimonials-256 .tab-container .nav-tabs {
    flex-direction: row
}

.module-testimonials-256 .block-header {
    text-align: center
}

.module-testimonials-256 .block-header i::before {
    content: '\e90b' !important;
    font-family: icomoon !important;
    font-size: 60px;
    color: rgba(233, 102, 49, 1)
}

.module-testimonials-256 .block-header i {
    margin-bottom: 10px
}

.module-testimonials-256 .block-footer {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 15px;
    color: rgba(105, 105, 115, 1);
    font-style: normal
}

@media (max-width: 1024px) {
    .module-testimonials-256 .swiper-buttons {
        display: none !important
    }

    .module-testimonials-256 .swiper-container {
        padding: 0px
    }
}

@media (max-width: 760px) {
    .module-testimonials-256 .swiper-container {
        overflow: visible
    }

    .module-testimonials-256.blocks-grid .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-testimonials-256.blocks-grid .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 470px) {
    .module-testimonials-256.blocks-grid .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-testimonials-256.blocks-grid .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .one-column #content .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-testimonials-256.blocks-grid .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .two-column #content .module-testimonials-256.blocks-grid .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 1 - 0.01px)
    }
}

.module-testimonials-256 .module-item-1 .block-header {
    text-align: center
}

.module-testimonials-256 .module-item-1 .block-content {
    max-height: 100% !important;
    overflow: visible !important;
    max-height: 75px;
    overflow: hidden
}

.module-testimonials-256 .module-item-1 .block-expand::after {
    content: 'Show More'
}

.module-testimonials-256 .module-item-1 .block-expanded+.block-expand-overlay .block-expand::after {
    content: 'Show Less'
}

.module-testimonials-256 .module-item-1 .block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-1 .block-expanded+.block-expand-overlay .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-1 .block-footer .btn {
    width: auto
}

.module-testimonials-256 .module-item-1 .block-footer {
    text-align: center
}

.module-testimonials-256 .module-item-2 .block-header {
    text-align: center
}

.module-testimonials-256 .module-item-2 .block-content {
    max-height: 100% !important;
    overflow: visible !important;
    max-height: 75px;
    overflow: hidden
}

.module-testimonials-256 .module-item-2 .block-expand::after {
    content: 'Show More'
}

.module-testimonials-256 .module-item-2 .block-expanded+.block-expand-overlay .block-expand::after {
    content: 'Show Less'
}

.module-testimonials-256 .module-item-2 .block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-2 .block-expanded+.block-expand-overlay .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-2 .block-footer .btn {
    width: auto
}

.module-testimonials-256 .module-item-2 .block-footer {
    text-align: center
}

.module-testimonials-256 .module-item-3 .block-header {
    text-align: center
}

.module-testimonials-256 .module-item-3 .block-content {
    max-height: 100% !important;
    overflow: visible !important;
    max-height: 75px;
    overflow: hidden
}

.module-testimonials-256 .module-item-3 .block-expand::after {
    content: 'Show More'
}

.module-testimonials-256 .module-item-3 .block-expanded+.block-expand-overlay .block-expand::after {
    content: 'Show Less'
}

.module-testimonials-256 .module-item-3 .block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-3 .block-expanded+.block-expand-overlay .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-3 .block-footer .btn {
    width: auto
}

.module-testimonials-256 .module-item-3 .block-footer {
    text-align: center
}

.module-testimonials-256 .module-item-4 .block-header {
    text-align: center
}

.module-testimonials-256 .module-item-4 .block-content {
    max-height: 100% !important;
    overflow: visible !important;
    max-height: 75px;
    overflow: hidden
}

.module-testimonials-256 .module-item-4 .block-expand::after {
    content: 'Show More'
}

.module-testimonials-256 .module-item-4 .block-expanded+.block-expand-overlay .block-expand::after {
    content: 'Show Less'
}

.module-testimonials-256 .module-item-4 .block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-4 .block-expanded+.block-expand-overlay .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-4 .block-footer .btn {
    width: auto
}

.module-testimonials-256 .module-item-4 .block-footer {
    text-align: center
}

.module-testimonials-256 .module-item-5 .block-header {
    text-align: center
}

.module-testimonials-256 .module-item-5 .block-content {
    max-height: 100% !important;
    overflow: visible !important;
    max-height: 75px;
    overflow: hidden
}

.module-testimonials-256 .module-item-5 .block-expand::after {
    content: 'Show More'
}

.module-testimonials-256 .module-item-5 .block-expanded+.block-expand-overlay .block-expand::after {
    content: 'Show Less'
}

.module-testimonials-256 .module-item-5 .block-expand::before {
    content: '\f078' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-5 .block-expanded+.block-expand-overlay .block-expand::before {
    content: '\f077' !important;
    font-family: icomoon !important
}

.module-testimonials-256 .module-item-5 .block-footer .btn {
    width: auto
}

.module-testimonials-256 .module-item-5 .block-footer {
    text-align: center
}

.module-popup-110 .popup-inner-body {
    max-height: calc(100vh - 50px * 2)
}

.module-popup-110 .popup-container {
    max-width: calc(100% - 20px * 2);
    width: 650px
}

.module-popup-110 .popup-bg {
    background: rgba(0, 0, 0, 0.75)
}

.module-popup-110 .popup-body,
.module-popup-110 .popup {
    background: rgba(255, 255, 255, 1)
}

.module-popup-110 .popup-content,
.module-popup-110 .popup .site-wrapper {
    padding: 20px
}

.module-popup-110 .popup-body {
    border-radius: 3px;
    box-shadow: 0 15px 90px -10px rgba(0, 0, 0, 0.2)
}

.module-popup-110 .popup-container .popup-close::before {
    content: '\e981' !important;
    font-family: icomoon !important;
    font-size: 18px
}

.module-popup-110 .popup-close {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    margin-top: 35px
}

.module-popup-110 .popup-container>.btn,
.module-popup-110 .popup-container>.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-popup-110 .popup-container>.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-popup-110 .popup-container>.btn:active,
.module-popup-110 .popup-container>.btn:hover:active,
.module-popup-110 .popup-container>.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-popup-110 .popup-container>.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-popup-110 .popup-container>.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-popup-110 .popup-container>.btn:hover {
    box-shadow: none
}

.module-popup-110 .popup-container>.btn.btn.disabled::after {
    font-size: 20px
}

.module-popup-110 .popup-content,
.popup.module-popup-110 .site-wrapper {
    padding: 0px !important
}

.module-popup-110 .popup-footer {
    padding: 13px
}

.module-popup-110 .popup-dont-show {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    padding: 3px;
    padding-right: 5px;
    padding-left: 5px;
    position: absolute;
    left: 5px;
    right: auto;
    top: 50%;
    transform: translateY(-50%)
}

.module-popup-110 .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.module-popup-110 .grid-row-1 .grid-col-1 {
    width: 45%;
    background-image: url('image/cache/catalog/journal3/gallery/aiony-haust-667702-unsplash-1500x1875.jpg');
    background-position: center top;
    background-size: cover
}

.module-popup-110 .grid-row-1 .grid-col-1 .grid-item {
    height: auto
}

.module-popup-110 .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

.module-popup-110 .grid-row-1 .grid-col-2 {
    width: 55.00000000000001%
}

.module-popup-110 .grid-row-1 .grid-col-2 .grid-item {
    height: auto
}

.module-popup-110 .grid-row-1 .grid-col-2 .grid-items {
    justify-content: center
}

@media (max-width: 760px) {
    .module-popup-110 .grid-row-1 .grid-col-2 {
        width: 100%
    }
}

.module-blocks-111.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.module-blocks-111.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-blocks-111.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-blocks-111.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-blocks-111.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-blocks-111.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-blocks-111.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-blocks-111.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-blocks-111 .block-body {
    padding: 25px;
    display: flex;
    flex-direction: column
}

.module-blocks-111 .block-title {
    order: -2
}

.module-blocks-111 .block-header {
    display: flex;
    float: none;
    order: -1;
    justify-content: flex-start;
    align-items: flex-start
}

.module-blocks-111 .block-header img {
    display: flex
}

.module-blocks-111 .block-wrapper {
    display: flex
}

.module-blocks-111 .block-header i {
    float: none;
    display: flex
}

.module-blocks-111 .module-item-1 .block-body {
    padding-bottom: 20px;
    display: flex;
    flex-direction: column
}

.module-blocks-111 .module-item-1 .block-header {
    display: flex;
    float: none;
    order: -1;
    justify-content: flex-start;
    align-items: flex-start
}

.module-blocks-111 .module-item-1 .block-header img {
    display: flex
}

.module-blocks-111 .module-item-1 .block-wrapper {
    display: flex
}

.module-blocks-111 .module-item-1 .block-header i {
    float: none;
    display: flex
}

.module-blocks-111 .module-item-1 .block-content {
    text-align: left;
    column-count: initial;
    column-gap: 20px;
    column-rule-width: 1px;
    column-rule-style: solid
}

.module-blocks-111 .module-item-1 .expand-content {
    max-height: 100%;
    overflow: visible
}

.module-blocks-111 .module-item-1 .block-footer .btn {
    width: auto;
    transform: scale(calc(100 / 100));
    transform-origin: center
}

.module-blocks-111 .module-item-1 .block-footer {
    text-align: center
}

.module-newsletter-113 {
    background: rgba(238, 238, 238, 1);
    padding: 25px;
    text-align: left;
    justify-content: flex-start
}

.module-newsletter-113 .module-body>div {
    align-self: flex-start
}

.module-newsletter-113 .title::after {
    left: 0;
    right: auto;
    transform: none
}

.module-newsletter-113 .module-body {
    flex-direction: column
}

.module-newsletter-113 .newsletter-text {
    color: rgba(105, 105, 115, 1);
    line-height: 1.3;
    padding-bottom: 10px
}

.module-newsletter-113 .module-body .input-group {
    height: 40px
}

.module-newsletter-113 .module-body .newsletter-form .input-group input {
    width: 300px;
    max-width: 100%
}

.module-newsletter-113 .btn::before {
    content: '\eb79' !important;
    font-family: icomoon !important;
    top: 1px;
    margin-right: 5px
}

.module-newsletter-113 .input-group .input-group-btn .btn,
.module-newsletter-113 .input-group .input-group-btn .btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-newsletter-113 .input-group .input-group-btn .btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px;
    padding-right: 10px;
    padding-bottom: 5px;
    padding-left: 10px;
    min-height: 30px;
    height: 30px
}

.desktop .module-newsletter-113 .input-group .input-group-btn .btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-newsletter-113 .input-group .input-group-btn .btn:active,
.module-newsletter-113 .input-group .input-group-btn .btn:hover:active,
.module-newsletter-113 .input-group .input-group-btn .btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-newsletter-113 .input-group .input-group-btn .btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-newsletter-113 .input-group .input-group-btn .btn.btn.disabled::after {
    font-size: 20px
}

.module-newsletter-113 .input-group-btn .btn {
    transform: translateX(-5px);
    margin-top: 5px
}

.module-notification-137 {
    color: rgba(255, 255, 255, 1);
    padding: 20px;
    padding-top: 15px;
    padding-right: 50px;
    bottom: 20px;
    background: rgba(0, 0, 0, 0.9);
    border-radius: 7px
}

.module-notification-137 a {
    text-decoration: underline
}

.module-notification-137.notification {
    max-width: 1280px
}

.module-notification-137 .notification-close {
    padding: 0px !important;
    display: flex;
    width: 35px;
    height: 35px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    top: 0;
    bottom: initial;
    left: initial;
    right: 0;
    transform: none
}

.module-notification-137 .notification-close::before {
    content: none !important
}

.module-notification-137 .notification-close.btn {
    background: rgba(80, 173, 85, 1)
}

.module-notification-137 .notification-close.btn:hover {
    background: rgba(13, 82, 214, 1) !important
}

.module-notification-137 .notification-close.btn.btn.disabled::after {
    font-size: 20px
}

.module-header_notice-56 .hn-close::before {
    content: '\e5cd' !important;
    font-family: icomoon !important;
    font-size: 22px
}

.module-header_notice-56 .hn-close.btn,
.module-header_notice-56 .hn-close.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-header_notice-56 .hn-close.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-header_notice-56 .hn-close.btn:active,
.module-header_notice-56 .hn-close.btn:hover:active,
.module-header_notice-56 .hn-close.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-header_notice-56 .hn-close.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-header_notice-56 .hn-close.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-header_notice-56 .hn-close.btn:hover {
    box-shadow: none
}

.module-header_notice-56 .hn-close.btn.btn.disabled::after {
    font-size: 20px
}

.module-header_notice-56 .hn-close {
    margin-left: 5px
}

.module-header_notice-56 .module-body p {
    margin-bottom: 7px
}

.module-header_notice-56 .module-body {
    height: auto;
    flex-direction: row;
    background: rgba(223, 231, 246, 1);
    padding: 5px;
    padding-top: 7px;
    padding-bottom: 7px
}

.module-header_notice-56 .header-notice-close-button {
    position: relative;
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    transform: none
}

.module-header_notice-56 .hn-content {
    line-height: 1.4
}

.module-header_notice-56 .hn-content a {
    text-decoration: underline
}

.module-header_notice-56 .hn-body::before {
    content: '\eafa' !important;
    font-family: icomoon !important;
    font-size: 20px;
    color: rgba(233, 102, 49, 1);
    margin-right: 5px;
    margin-left: 5px;
    float: none
}

.module-header_notice-56 .hn-body {
    display: flex
}

.module-catalog-119 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.module-catalog-119 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.one-column #content .module-catalog-119 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-catalog-119 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-catalog-119 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-catalog-119 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-catalog-119 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-catalog-119 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-catalog-119 .catalog-title {
    margin-bottom: 8px;
    display: flex;
    font-family: 'Montserrat';
    font-weight: 700;
    color: rgba(51, 51, 51, 1);
    text-transform: uppercase;
    width: auto;
    margin-left: 0;
    margin-right: auto;
    justify-content: flex-start;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-catalog-119 .subitems {
    align-items: flex-start
}

.module-catalog-119 .subitem>a span {
    font-size: 14px;
    color: rgba(105, 105, 115, 1)
}

.module-catalog-119 .subitem>a:hover span {
    color: rgba(13, 82, 214, 1);
    text-decoration: underline
}

.module-catalog-119 .subitem.view-more a span {
    color: rgba(105, 105, 115, 1);
    font-weight: 700;
    text-decoration: underline
}

.module-catalog-119 .subitem.view-more a:hover span {
    color: rgba(15, 58, 141, 1)
}

.module-catalog-119 .subitem>a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-bottom: 6px
}

.module-catalog-119 .catalog-image img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.module-catalog-119 .catalog-image {
    margin-right: 10px
}

.module-catalog-119 .item-assets {
    flex-direction: row
}

.module-catalog-119 .item-assets>a {
    max-width: 40%;
    order: 0
}

.module-catalog-119 .item-assets .subitems {
    width: 60%
}

.module-catalog-119 .item-assets .catalog-image {
    display: block
}

@media (max-width: 1024px) {
    .module-catalog-119 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-catalog-119 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 760px) {
    .module-catalog-119 .subitem>a {
        padding-bottom: 10px
    }
}

.module-catalog-262 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.module-catalog-262 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.one-column #content .module-catalog-262 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-catalog-262 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-catalog-262 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-catalog-262 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-catalog-262 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-catalog-262 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-catalog-262 .swiper-container {
    overflow: hidden
}

.module-catalog-262 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-catalog-262:hover .swiper-buttons {
    display: block
}

.module-catalog-262 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-catalog-262 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-catalog-262 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-catalog-262 .swiper-button-disabled {
    opacity: 0
}

.module-catalog-262 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-catalog-262 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-catalog-262 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-catalog-262 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-catalog-262 .swiper {
    padding-bottom: 15px
}

.module-catalog-262 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-catalog-262 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-catalog-262 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-catalog-262 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-catalog-262 .swiper-pagination>span {
    border-radius: 50px
}

.module-catalog-262 .catalog-title {
    margin-bottom: 8px;
    display: flex;
    font-family: 'Montserrat';
    font-weight: 700;
    color: rgba(51, 51, 51, 1);
    text-transform: uppercase;
    width: auto;
    margin-left: 0;
    margin-right: auto;
    justify-content: flex-start;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-catalog-262 .subitems {
    align-items: flex-start
}

.module-catalog-262 .subitem>a span {
    font-size: 14px;
    color: rgba(105, 105, 115, 1)
}

.module-catalog-262 .subitem>a:hover span {
    color: rgba(13, 82, 214, 1);
    text-decoration: underline
}

.module-catalog-262 .subitem.view-more a span {
    color: rgba(105, 105, 115, 1);
    font-weight: 700;
    text-decoration: underline
}

.module-catalog-262 .subitem.view-more a:hover span {
    color: rgba(15, 58, 141, 1)
}

.module-catalog-262 .subitem>a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-bottom: 6px
}

.module-catalog-262 .catalog-image img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.module-catalog-262 .catalog-image {
    margin-right: 10px
}

.module-catalog-262 .item-assets {
    flex-direction: row
}

.module-catalog-262 .item-assets>a {
    max-width: 40%;
    order: 0
}

.module-catalog-262 .item-assets .subitems {
    width: 60%
}

.module-catalog-262 .item-assets .catalog-image {
    display: block
}

@media (max-width: 1024px) {
    .module-catalog-262 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-catalog-262 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .module-catalog-262 .swiper-buttons {
        display: none !important
    }
}

@media (max-width: 760px) {
    .module-catalog-262 .swiper-container {
        overflow: visible
    }

    .module-catalog-262 .subitem>a {
        padding-bottom: 10px
    }
}

.module-banners-201 .swiper-container {
    overflow: hidden
}

.module-banners-201 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-banners-201:hover .swiper-buttons {
    display: block
}

.module-banners-201 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-banners-201 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-banners-201 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-banners-201 .swiper-button-disabled {
    opacity: 0
}

.module-banners-201 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-banners-201 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-banners-201 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-banners-201 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-banners-201 .swiper {
    padding-bottom: 15px
}

.module-banners-201 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-banners-201 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-banners-201 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-banners-201 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-banners-201 .swiper-pagination>span {
    border-radius: 50px
}

.module-banners-201 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.module-banners-201 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-banners-201 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-banners-201 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-banners-201 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-banners-201 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-banners-201 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-banners-201 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-banners-201 a img {
    transform: scale(1)
}

.module-banners-201 .module-item>a::before {
    background: rgba(52, 59, 151, 0.2)
}

.module-banners-201 a::before {
    opacity: 0
}

.desktop .module-banners-201 a:hover::before {
    opacity: 1
}

.module-banners-201 a::after {
    opacity: 0
}

.desktop .module-banners-201 a:hover::after {
    opacity: 1
}

.module-banners-201 .banner-caption {
    visibility: hidden;
    opacity: 0;
    display: block;
    top: auto;
    left: 50%;
    right: auto;
    bottom: 0;
    transform: translate3d(-50%, 0, 0)
}

.desktop .module-banners-201 a:hover .banner-caption {
    visibility: visible;
    opacity: 1
}

.module-banners-201 a .banner-caption {
    width: 100%
}

.module-banners-201 .banner-caption span::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    top: 1px;
    margin-left: 5px
}

.module-banners-201 .banner-caption span {
    transform: scale(calc(100 / 100));
    transform-origin: center;
    white-space: normal;
    ;
    text-align: center;
    background: rgba(13, 82, 214, 1);
    margin: 15px;
    padding: 10px;
    padding-bottom: 12px
}

.module-banners-201 .banner-caption-2 {
    visibility: hidden;
    opacity: 0;
    display: block;
    top: auto;
    left: 50%;
    right: auto;
    bottom: 0;
    transform: translate3d(-50%, 0, 0)
}

.desktop .module-banners-201 a:hover .banner-caption-2 {
    visibility: visible;
    opacity: 1
}

.module-banners-201 a .banner-caption-2 {
    width: 100%
}

.module-banners-201 .banner-caption-2 span {
    transform: scale(calc(100 / 100));
    transform-origin: center;
    white-space: normal;
    ;
    padding: 10px
}

.module-banners-201 .banner-caption-3 span {
    white-space: normal
}

@media (max-width: 1024px) {
    .module-banners-201 .swiper-buttons {
        display: none !important
    }
}

@media (max-width: 760px) {
    .module-banners-201 .swiper-container {
        overflow: visible
    }
}

.module-products-227 .title.module-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-products-227 .title.module-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-products-227 .title.module-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-products-227 .title.module-title::after,
.module-products-227 .title.module-title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.module-products-227 .swiper-container {
    overflow: hidden
}

.module-products-227 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-products-227:hover .swiper-buttons {
    display: block
}

.module-products-227 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-products-227 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-products-227 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-products-227 .swiper-button-disabled {
    opacity: 0
}

.module-products-227 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-227 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-227 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-products-227 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-products-227 .swiper {
    padding-bottom: 15px
}

.module-products-227 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-products-227 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-products-227 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-products-227 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-products-227 .swiper-pagination>span {
    border-radius: 50px
}

.module-products-227 .nav-tabs>li>a,
.module-products-227 .nav-tabs>li.active>a,
.module-products-227 .nav-tabs>li.active>a:hover,
.module-products-227 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-products-227 .nav-tabs>li:hover>a,
.module-products-227 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-products-227 .nav-tabs>li.active>a,
.module-products-227 .nav-tabs>li.active>a:hover,
.module-products-227 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-products-227 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-products-227 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-products-227 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-products-227 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-products-227 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-products-227 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-products-227 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-products-227 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-products-227 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-products-227 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-products-227 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-products-227 .tab-container::before {
    display: none
}

.module-products-227 .tab-content {
    padding-top: 20px
}

.module-products-227 .tab-container {
    display: block
}

.module-products-227 .tab-container .nav-tabs {
    flex-direction: row
}

.module-products-227 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.module-products-227 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-products-227 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 2 * 0px) / 3 - 0.01px)
}

.one-column #content .module-products-227 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-products-227 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 2 * 0px) / 3 - 0.01px)
}

.two-column #content .module-products-227 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 3 - 0.01px)
}

.side-column .module-products-227 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-products-227 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-products-227:not(.carousel-mode) .module-body .module-item>div {
    margin: -7px
}

.module-products-227 .product-grid .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.desktop .module-products-227 .product-grid .product-thumb:hover .product-img {
    border-color: rgba(15, 58, 141, 1)
}

.module-products-227 .product-grid .product-thumb .product-labels {
    display: none;
    visibility: visible;
    opacity: 1
}

.module-products-227 .product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 0;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, 0, 1px)
}

.module-products-227 .product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88)
}

.module-products-227 .product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-227 .product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-227 .product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 14px
}

.module-products-227 .product-grid .product-thumb .image .btn,
.module-products-227 .product-grid .product-thumb .image .btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-227 .product-grid .product-thumb .image .btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-227 .product-grid .product-thumb .image .btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-227 .product-grid .product-thumb .image .btn:active,
.module-products-227 .product-grid .product-thumb .image .btn:hover:active,
.module-products-227 .product-grid .product-thumb .image .btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-227 .product-grid .product-thumb .image .btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-227 .product-grid .product-thumb .image .btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-grid .product-thumb .countdown {
    display: none;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1)
}

.module-products-227 .product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-227 .product-grid .product-thumb .stats {
    display: flex;
    justify-content: space-between;
    color: rgba(105, 105, 115, 1);
    padding-top: 2px;
    padding-bottom: 3px
}

.module-products-227 .product-grid .stat-1 .stats-label {
    display: none
}

.module-products-227 .product-grid .stat-2 .stats-label {
    display: none
}

.module-products-227 .product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: visible;
    opacity: 1;
    top: 0
}

.module-products-227 .product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.module-products-227 .product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.module-products-227 .product-grid .product-thumb .rating.no-rating {
    display: none
}

.module-products-227 .product-grid .product-thumb .rating .fa-stack {
    font-size: 10px;
    width: 1.1em
}

.module-products-227 .product-grid .product-thumb .rating-stars {
    padding-bottom: 10px;
    margin-top: -5px
}

.module-products-227 .product-grid .product-thumb .rating.no-rating span {
    opacity: 0.5
}

.module-products-227 .product-grid .product-thumb .name {
    display: flex;
    width: 100%;
    margin-left: 0;
    margin-right: 0;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-top: 5px
}

.module-products-227 .product-grid .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 12px;
    color: rgba(51, 51, 51, 1);
    text-align: left;
    text-align: left
}

.module-products-227 .product-grid .product-thumb .description {
    display: none;
    padding: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-227 .product-grid .product-thumb .price {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-top: 3px
}

.module-products-227 .product-grid .product-thumb .price-tax {
    display: none;
    font-size: 12px;
    text-align: left
}

.module-products-227 .product-grid .product-thumb .price-new {
    color: rgba(221, 14, 28, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-227 .product-grid .product-thumb .price-old {
    font-size: 12px;
    color: rgba(139, 145, 152, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-227 .product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-227 .product-grid .product-thumb .buttons-wrapper {
    display: block
}

.module-products-227 .product-grid .product-thumb .button-group {
    justify-content: center
}

.module-products-227 .product-grid.product-grid .product-thumb .button-group {
    background: rgba(15, 58, 141, 1);
    margin-bottom: 1px
}

.module-products-227 .product-grid .product-thumb .cart-group {
    display: inline-flex
}

.module-products-227 .product-grid .product-thumb .btn-cart {
    width: 30px;
    height: 30px
}

.module-products-227 .product-grid .product-thumb .btn-wishlist {
    width: 30px;
    height: 30px;
    display: inline-flex
}

.module-products-227 .product-grid .product-thumb .btn-compare {
    width: 30px;
    height: 30px;
    display: inline-flex
}

.module-products-227 .product-grid .product-thumb .btn-cart .btn-text {
    display: none
}

.module-products-227 .product-grid .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 13px;
    left: 2px;
    margin-right: 2px
}

.module-products-227 .product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-227 .product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-227 .product-grid .product-thumb .stepper {
    display: none;
    margin-right: 5px;
    height: 30px
}

.module-products-227 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.module-products-227 .product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.module-products-227 .product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 13px
}

.module-products-227 .product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-227 .product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 13px
}

.module-products-227 .product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-227 .product-grid .product-thumb .extra-group {
    display: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-227 .product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-227 .product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block
}

.module-products-227 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-227 .product-grid .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-227 .product-grid .product-thumb .extra-group>div {
    padding-top: 4px;
    margin-top: 5px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn,
.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:active,
.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-227 .product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn,
.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-227 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: auto
}

.module-products-227 .product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-227 .product-grid.product-grid .product-thumb .buttons-wrapper {
    position: absolute;
    overflow: hidden;
    width: 100%;
    left: 50%;
    transform: translate3d(-50%, -100%, 1px)
}

.module-products-227 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: relative;
    opacity: 0;
    visibility: hidden;
    transform: translate3d(0, 15px, 1px)
}

.module-products-227 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    opacity: 1;
    visibility: visible;
    transform: translate3d(0, 0, 1px)
}

.module-products-227 .product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: flex-start
}

.module-products-227 .product-grid .product-thumb .btn-quickview.btn {
    border-radius: 0px !important;
    padding: 10px !important
}

.module-products-227 .product-grid .product-thumb .btn-cart.btn {
    border-radius: 0px !important
}

.module-products-227 .product-grid .product-thumb .btn-wishlist.btn {
    border-radius: 0px !important
}

.module-products-227 .product-grid .product-thumb .btn-compare.btn {
    border-radius: 0px !important
}

.module-products-227 .product-list .product-thumb {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding-bottom: 25px
}

.module-products-227 .product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
    margin-top: 25px
}

.module-products-227 .product-list .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-227 .product-list .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-227 .product-list .product-thumb .product-img img {
    border-radius: 5px
}

.module-products-227 .product-list .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-227 .product-list .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-227 .product-list .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.module-products-227 .product-list .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-227 .product-list .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-227 .product-list .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.module-products-227 .product-list .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    bottom: 10px
}

.module-products-227 .product-list.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-227 .product-list .product-thumb .caption {
    padding-left: 20px
}

.module-products-227 .product-list .product-thumb .stats {
    display: flex;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-227 .product-list .stat-1 .stats-label {
    display: inline-block
}

.module-products-227 .product-list .stat-2 .stats-label {
    display: inline-block
}

.module-products-227 .product-list.product-grid .product-thumb .rating {
    position: static;
    visibility: visible;
    opacity: 1
}

.module-products-227 .product-list .product-thumb .rating {
    justify-content: flex-end;
    margin-bottom: 5px;
    display: flex
}

.module-products-227 .product-list .product-thumb .rating.no-rating {
    display: none
}

.module-products-227 .product-list .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-products-227 .product-list .product-thumb .rating .fa-star,
.module-products-227 .product-list .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-products-227 .product-list .product-thumb .rating-stars {
    margin-top: -18px
}

.module-products-227 .product-list .product-thumb .rating.no-rating span {
    opacity: .3
}

.module-products-227 .product-list .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 5px
}

.module-products-227 .product-list .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 22px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    text-align: left
}

.module-products-227 .product-list .product-thumb .description {
    display: block;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    line-height: 1.5;
    margin-top: 5px;
    margin-bottom: 10px
}

.module-products-227 .product-list .product-thumb .price {
    display: block;
    font-family: 'Roboto';
    font-weight: 700;
    font-size: 22px;
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-227 .product-list .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1)
}

.module-products-227 .product-list .product-thumb .price-new {
    color: rgba(233, 102, 49, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-227 .product-list .product-thumb .price-old {
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-227 .product-list .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-227 .product-list .product-thumb .buttons-wrapper {
    display: block
}

.module-products-227 .product-list .product-thumb .button-group {
    justify-content: flex-start
}

.module-products-227 .product-list.product-list .product-thumb .buttons-wrapper {
    margin-top: 5px
}

.module-products-227 .product-list .product-thumb .cart-group {
    display: inline-flex
}

.module-products-227 .product-list .product-thumb .btn-cart {
    height: 38px;
    margin-right: 5px
}

.module-products-227 .product-list .product-thumb .btn-wishlist {
    width: 38px;
    height: 38px;
    display: inline-flex
}

.module-products-227 .product-list .product-thumb .btn-compare {
    width: 38px;
    height: 38px;
    display: inline-flex;
    margin-left: 5px
}

.module-products-227 .product-list .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 16px
}

.module-products-227 .product-list .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-227 .product-list.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-227 .product-list.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-227 .product-list .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    height: 38px
}

.module-products-227 .product-list .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.module-products-227 .product-list .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.module-products-227 .product-list .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 16px
}

.module-products-227 .product-list .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn,
.module-products-227 .product-list .product-thumb .btn-wishlist.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn:active,
.module-products-227 .product-list .product-thumb .btn-wishlist.btn:hover:active,
.module-products-227 .product-list .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn:hover,
.module-products-227 .product-list .product-thumb .btn-wishlist.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-227 .product-list .product-thumb .btn-wishlist.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-list .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 16px
}

.module-products-227 .product-list .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-227 .product-list .product-thumb .btn-compare.btn,
.module-products-227 .product-list .product-thumb .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-227 .product-list .product-thumb .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-227 .product-list .product-thumb .btn-compare.btn:active,
.module-products-227 .product-list .product-thumb .btn-compare.btn:hover:active,
.module-products-227 .product-list .product-thumb .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-compare.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-227 .product-list .product-thumb .btn-compare.btn:hover,
.module-products-227 .product-list .product-thumb .btn-compare.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-227 .product-list .product-thumb .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-227 .product-list .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-list .product-thumb .extra-group {
    display: block
}

.module-products-227 .product-list .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-227 .product-list .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-227 .product-list .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.module-products-227 .product-list .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(221, 14, 28, 1)
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn {
    margin-left: 5px;
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.module-products-227 .product-list .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-227 .product-list .product-thumb .extra-group>div {
    margin-top: 10px
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn,
.module-products-227 .product-list .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn:active,
.module-products-227 .product-list .product-thumb .extra-group .btn.btn:hover:active,
.module-products-227 .product-list .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-227 .product-list .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn,
.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.desktop .module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-227 .product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-227 .product-list.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-227 .product-list.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-227 .product-list.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-227 .product-list.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-227 .product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-227 .product-list.product-grid .wish-group {
    justify-content: flex-start
}

.module-products-227 .product-list .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

@media (max-width: 1024px) {
    .module-products-227 .swiper-buttons {
        display: none !important
    }

    .module-products-227 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
    }

    .module-products-227 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
    }

    .module-products-227 .product-grid .product-thumb .product-img {
        border-width: 1px;
        border-bottom-width: 0px;
        border-color: rgba(15, 58, 141, 1)
    }

    .module-products-227 .product-grid .product-thumb .btn-quickview {
        visibility: visible;
        opacity: 1
    }

    .module-products-227 .product-grid.product-grid .product-thumb .extra-group {
        margin-top: auto
    }

    .module-products-227 .product-grid.product-grid .product-thumb .buttons-wrapper {
        position: static;
        width: auto;
        overflow: visible;
        order: -5;
        margin-top: 0;
        transform: none
    }

    .module-products-227 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none
    }
}

@media (max-width: 769px) {
    .module-products-227 .product-list .product-thumb .rating {
        justify-content: flex-start
    }

    .module-products-227 .product-list .product-thumb .rating-stars {
        margin-top: 0px
    }
}

@media (max-width: 760px) {
    .module-products-227 .swiper-container {
        overflow: visible
    }

    .module-products-227 .product-list.product-list .product-layout .image {
        float: none;
        height: auto
    }

    .module-products-227 .product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
    }

    .module-products-227 .product-list .product-thumb .btn-wishlist.btn {
        border-width: 1px
    }

    .module-products-227 .product-list .product-thumb .btn-compare.btn {
        border-width: 1px
    }
}

.module-products-213 .title.module-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-products-213 .title.module-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-products-213 .title.module-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-products-213 .title.module-title::after,
.module-products-213 .title.module-title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.module-products-213 .swiper-container {
    overflow: hidden
}

.module-products-213 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-products-213:hover .swiper-buttons {
    display: block
}

.module-products-213 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-products-213 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-products-213 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-products-213 .swiper-button-disabled {
    opacity: 0
}

.module-products-213 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-213 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-213 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-products-213 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-products-213 .swiper {
    padding-bottom: 15px
}

.module-products-213 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-products-213 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-products-213 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-products-213 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-products-213 .swiper-pagination>span {
    border-radius: 50px
}

.module-products-213 .nav-tabs>li>a,
.module-products-213 .nav-tabs>li.active>a,
.module-products-213 .nav-tabs>li.active>a:hover,
.module-products-213 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-products-213 .nav-tabs>li:hover>a,
.module-products-213 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-products-213 .nav-tabs>li.active>a,
.module-products-213 .nav-tabs>li.active>a:hover,
.module-products-213 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-products-213 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-products-213 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-products-213 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-products-213 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-products-213 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-products-213 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-products-213 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-products-213 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-products-213 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-products-213 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-products-213 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-products-213 .tab-container::before {
    display: none
}

.module-products-213 .tab-content {
    padding-top: 20px
}

.module-products-213 .tab-container {
    display: block
}

.module-products-213 .tab-container .nav-tabs {
    flex-direction: row
}

.module-products-213 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.module-products-213 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-products-213 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-products-213 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-products-213 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-products-213 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-products-213 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-products-213 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-products-213:not(.carousel-mode) .module-body .module-item>div {
    margin: -7px
}

.module-products-213 .product-grid .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.desktop .module-products-213 .product-grid .product-thumb:hover .product-img {
    border-color: rgba(15, 58, 141, 1)
}

.module-products-213 .product-grid .product-thumb .product-labels {
    display: none;
    visibility: visible;
    opacity: 1
}

.module-products-213 .product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 0;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, 0, 1px)
}

.module-products-213 .product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88)
}

.module-products-213 .product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-213 .product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-213 .product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 14px
}

.module-products-213 .product-grid .product-thumb .image .btn,
.module-products-213 .product-grid .product-thumb .image .btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-213 .product-grid .product-thumb .image .btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-213 .product-grid .product-thumb .image .btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-213 .product-grid .product-thumb .image .btn:active,
.module-products-213 .product-grid .product-thumb .image .btn:hover:active,
.module-products-213 .product-grid .product-thumb .image .btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-213 .product-grid .product-thumb .image .btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-213 .product-grid .product-thumb .image .btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-grid .product-thumb .countdown {
    display: none;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1)
}

.module-products-213 .product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-213 .product-grid .product-thumb .stats {
    display: flex;
    justify-content: space-between;
    color: rgba(105, 105, 115, 1);
    padding-top: 2px;
    padding-bottom: 3px
}

.module-products-213 .product-grid .stat-1 .stats-label {
    display: none
}

.module-products-213 .product-grid .stat-2 .stats-label {
    display: none
}

.module-products-213 .product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: visible;
    opacity: 1;
    top: 0
}

.module-products-213 .product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.module-products-213 .product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.module-products-213 .product-grid .product-thumb .rating.no-rating {
    display: none
}

.module-products-213 .product-grid .product-thumb .rating .fa-stack {
    font-size: 10px;
    width: 1.1em
}

.module-products-213 .product-grid .product-thumb .rating-stars {
    padding-bottom: 10px;
    margin-top: -5px
}

.module-products-213 .product-grid .product-thumb .rating.no-rating span {
    opacity: 0.5
}

.module-products-213 .product-grid .product-thumb .name {
    display: flex;
    width: 100%;
    margin-left: 0;
    margin-right: 0;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-top: 5px
}

.module-products-213 .product-grid .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 12px;
    color: rgba(51, 51, 51, 1);
    text-align: left;
    text-align: left
}

.module-products-213 .product-grid .product-thumb .description {
    display: none;
    padding: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-213 .product-grid .product-thumb .price {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-top: 3px
}

.module-products-213 .product-grid .product-thumb .price-tax {
    display: none;
    font-size: 12px;
    text-align: left
}

.module-products-213 .product-grid .product-thumb .price-new {
    color: rgba(221, 14, 28, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-213 .product-grid .product-thumb .price-old {
    font-size: 12px;
    color: rgba(139, 145, 152, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-213 .product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-213 .product-grid .product-thumb .buttons-wrapper {
    display: block
}

.module-products-213 .product-grid .product-thumb .button-group {
    justify-content: center
}

.module-products-213 .product-grid.product-grid .product-thumb .button-group {
    background: rgba(15, 58, 141, 1);
    margin-bottom: 1px
}

.module-products-213 .product-grid .product-thumb .cart-group {
    display: inline-flex
}

.module-products-213 .product-grid .product-thumb .btn-cart {
    width: 30px;
    height: 30px
}

.module-products-213 .product-grid .product-thumb .btn-wishlist {
    width: 30px;
    height: 30px;
    display: inline-flex
}

.module-products-213 .product-grid .product-thumb .btn-compare {
    width: 30px;
    height: 30px;
    display: inline-flex
}

.module-products-213 .product-grid .product-thumb .btn-cart .btn-text {
    display: none
}

.module-products-213 .product-grid .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 13px;
    left: 2px;
    margin-right: 2px
}

.module-products-213 .product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-213 .product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-213 .product-grid .product-thumb .stepper {
    display: none;
    margin-right: 5px;
    height: 30px
}

.module-products-213 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.module-products-213 .product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.module-products-213 .product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 13px
}

.module-products-213 .product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-213 .product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 13px
}

.module-products-213 .product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-213 .product-grid .product-thumb .extra-group {
    display: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-213 .product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-213 .product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block
}

.module-products-213 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-213 .product-grid .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-213 .product-grid .product-thumb .extra-group>div {
    padding-top: 4px;
    margin-top: 5px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn,
.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:active,
.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn,
.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: auto
}

.module-products-213 .product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper {
    position: absolute;
    overflow: hidden;
    width: 100%;
    left: 50%;
    transform: translate3d(-50%, -100%, 1px)
}

.module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: relative;
    opacity: 0;
    visibility: hidden;
    transform: translate3d(0, 15px, 1px)
}

.module-products-213 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    opacity: 1;
    visibility: visible;
    transform: translate3d(0, 0, 1px)
}

.module-products-213 .product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: flex-start
}

.module-products-213 .product-grid .product-thumb .btn-quickview.btn {
    border-radius: 0px !important;
    padding: 10px !important
}

.module-products-213 .product-grid .product-thumb .btn-cart.btn {
    border-radius: 0px !important
}

.module-products-213 .product-grid .product-thumb .btn-wishlist.btn {
    border-radius: 0px !important
}

.module-products-213 .product-grid .product-thumb .btn-compare.btn {
    border-radius: 0px !important
}

.module-products-213 .product-list .product-thumb {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding-bottom: 25px
}

.module-products-213 .product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
    margin-top: 25px
}

.module-products-213 .product-list .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-213 .product-list .product-thumb .product-img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-213 .product-list .product-thumb .product-img img {
    border-radius: 5px
}

.module-products-213 .product-list .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-213 .product-list .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-213 .product-list .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 40px;
    height: 40px
}

.module-products-213 .product-list .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-213 .product-list .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-213 .product-list .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.module-products-213 .product-list .product-thumb .countdown {
    display: flex;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1);
    bottom: 10px
}

.module-products-213 .product-list.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-213 .product-list .product-thumb .caption {
    padding-left: 20px
}

.module-products-213 .product-list .product-thumb .stats {
    display: flex;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-213 .product-list .stat-1 .stats-label {
    display: inline-block
}

.module-products-213 .product-list .stat-2 .stats-label {
    display: inline-block
}

.module-products-213 .product-list.product-grid .product-thumb .rating {
    position: static;
    visibility: visible;
    opacity: 1
}

.module-products-213 .product-list .product-thumb .rating {
    justify-content: flex-end;
    margin-bottom: 5px;
    display: flex
}

.module-products-213 .product-list .product-thumb .rating.no-rating {
    display: none
}

.module-products-213 .product-list .product-thumb .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-products-213 .product-list .product-thumb .rating .fa-star,
.module-products-213 .product-list .product-thumb .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-products-213 .product-list .product-thumb .rating-stars {
    margin-top: -18px
}

.module-products-213 .product-list .product-thumb .rating.no-rating span {
    opacity: .3
}

.module-products-213 .product-list .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 5px
}

.module-products-213 .product-list .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 22px;
    color: rgba(51, 51, 51, 1);
    text-transform: none;
    text-align: left
}

.module-products-213 .product-list .product-thumb .description {
    display: block;
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    line-height: 1.5;
    margin-top: 5px;
    margin-bottom: 10px
}

.module-products-213 .product-list .product-thumb .price {
    display: block;
    font-family: 'Roboto';
    font-weight: 700;
    font-size: 22px;
    text-align: left;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    margin-bottom: 10px
}

.module-products-213 .product-list .product-thumb .price-tax {
    display: block;
    font-size: 12px;
    color: rgba(105, 105, 115, 1)
}

.module-products-213 .product-list .product-thumb .price-new {
    color: rgba(233, 102, 49, 1);
    margin: 0 7px 0 0;
    order: 1
}

.module-products-213 .product-list .product-thumb .price-old {
    font-size: 16px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-213 .product-list .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-213 .product-list .product-thumb .buttons-wrapper {
    display: block
}

.module-products-213 .product-list .product-thumb .button-group {
    justify-content: flex-start
}

.module-products-213 .product-list.product-list .product-thumb .buttons-wrapper {
    margin-top: 5px
}

.module-products-213 .product-list .product-thumb .cart-group {
    display: inline-flex
}

.module-products-213 .product-list .product-thumb .btn-cart {
    height: 38px;
    margin-right: 5px
}

.module-products-213 .product-list .product-thumb .btn-wishlist {
    width: 38px;
    height: 38px;
    display: inline-flex
}

.module-products-213 .product-list .product-thumb .btn-compare {
    width: 38px;
    height: 38px;
    display: inline-flex;
    margin-left: 5px
}

.module-products-213 .product-list .product-thumb .btn-cart::before {
    display: inline-block;
    font-size: 16px
}

.module-products-213 .product-list .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-213 .product-list.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-213 .product-list.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-213 .product-list .product-thumb .stepper {
    display: inline-flex;
    width: 50px;
    height: 36px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    border-radius: 3px;
    margin-right: 5px;
    height: 38px
}

.module-products-213 .product-list .product-thumb .stepper input.form-control {
    background: rgba(255, 255, 255, 1) !important;
    border-width: 0px !important
}

.module-products-213 .product-list .product-thumb .stepper span i {
    color: rgba(105, 105, 115, 1);
    background-color: rgba(238, 238, 238, 1)
}

.module-products-213 .product-list .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 16px
}

.module-products-213 .product-list .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn,
.module-products-213 .product-list .product-thumb .btn-wishlist.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn:active,
.module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover:active,
.module-products-213 .product-list .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover,
.module-products-213 .product-list .product-thumb .btn-wishlist.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-list .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 16px
}

.module-products-213 .product-list .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-213 .product-list .product-thumb .btn-compare.btn,
.module-products-213 .product-list .product-thumb .btn-compare.btn:visited {
    font-size: 13px;
    color: rgba(44, 54, 64, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-213 .product-list .product-thumb .btn-compare.btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-213 .product-list .product-thumb .btn-compare.btn:active,
.module-products-213 .product-list .product-thumb .btn-compare.btn:hover:active,
.module-products-213 .product-list .product-thumb .btn-compare.btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    border-color: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-compare.btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-compare.btn {
    background: none;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(105, 105, 115, 1);
    padding: 12px;
    padding-right: 15px;
    padding-left: 15px
}

.module-products-213 .product-list .product-thumb .btn-compare.btn:hover,
.module-products-213 .product-list .product-thumb .btn-compare.btn:active:hover {
    border-color: rgba(13, 82, 214, 1)
}

.desktop .module-products-213 .product-list .product-thumb .btn-compare.btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-213 .product-list .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-list .product-thumb .extra-group {
    display: block
}

.module-products-213 .product-list .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-213 .product-list .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-213 .product-list .product-thumb .extra-group .btn:first-child::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(80, 173, 85, 1)
}

.module-products-213 .product-list .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn::before {
    display: inline-block;
    font-size: 16px;
    color: rgba(221, 14, 28, 1)
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn {
    margin-left: 5px;
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.module-products-213 .product-list .product-layout .extra-group>div {
    justify-content: flex-start
}

.module-products-213 .product-list .product-thumb .extra-group>div {
    margin-top: 10px
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn,
.module-products-213 .product-list .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn:active,
.module-products-213 .product-list .product-thumb .extra-group .btn.btn:hover:active,
.module-products-213 .product-list .product-thumb .extra-group .btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-213 .product-list .product-thumb .extra-group .btn.btn:hover {
    box-shadow: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn,
.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.desktop .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: none
}

.module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-213 .product-list.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-213 .product-list.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-213 .product-list.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-213 .product-list.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-213 .product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-213 .product-list.product-grid .wish-group {
    justify-content: flex-start
}

.module-products-213 .product-list .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

@media (max-width: 1024px) {
    .module-products-213 .swiper-buttons {
        display: none !important
    }

    .module-products-213 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
    }

    .module-products-213 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
    }

    .module-products-213 .product-grid .product-thumb .product-img {
        border-width: 1px;
        border-bottom-width: 0px;
        border-color: rgba(15, 58, 141, 1)
    }

    .module-products-213 .product-grid .product-thumb .btn-quickview {
        visibility: visible;
        opacity: 1
    }

    .module-products-213 .product-grid.product-grid .product-thumb .extra-group {
        margin-top: auto
    }

    .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper {
        position: static;
        width: auto;
        overflow: visible;
        order: -5;
        margin-top: 0;
        transform: none
    }

    .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none
    }
}

@media (max-width: 769px) {
    .module-products-213 .product-list .product-thumb .rating {
        justify-content: flex-start
    }

    .module-products-213 .product-list .product-thumb .rating-stars {
        margin-top: 0px
    }
}

@media (max-width: 760px) {
    .module-products-213 .swiper-container {
        overflow: visible
    }

    .module-products-213 .product-list.product-list .product-layout .image {
        float: none;
        height: auto
    }

    .module-products-213 .product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn {
        border-width: 1px
    }

    .module-products-213 .product-list .product-thumb .btn-compare.btn {
        border-width: 1px
    }
}

.module-blocks-212 .swiper-container {
    overflow: hidden
}

.module-blocks-212 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-blocks-212:hover .swiper-buttons {
    display: block
}

.module-blocks-212 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-blocks-212 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-blocks-212 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-blocks-212 .swiper-button-disabled {
    opacity: 0
}

.module-blocks-212 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-blocks-212 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-blocks-212 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-blocks-212 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-blocks-212 .swiper {
    padding-bottom: 15px
}

.module-blocks-212 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-blocks-212 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-blocks-212 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-blocks-212 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-blocks-212 .swiper-pagination>span {
    border-radius: 50px
}

.module-blocks-212.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.module-blocks-212.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-blocks-212.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-blocks-212.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-blocks-212.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-blocks-212.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-blocks-212.blocks-grid .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-blocks-212.blocks-grid .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-blocks-212 .title.block-title {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 17px;
    margin-bottom: 15px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-blocks-212 .title.block-title::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-blocks-212 .title.block-title.page-title>span::after {
    content: '';
    display: block;
    position: relative;
    margin-top: 10px
}

.module-blocks-212 .title.block-title::after,
.module-blocks-212 .title.block-title.page-title>span::after {
    width: 50px;
    height: 1px;
    background: rgba(233, 102, 49, 1)
}

.module-blocks-212 .nav-tabs>li>a,
.module-blocks-212 .nav-tabs>li.active>a,
.module-blocks-212 .nav-tabs>li.active>a:hover,
.module-blocks-212 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-blocks-212 .nav-tabs>li:hover>a,
.module-blocks-212 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-blocks-212 .nav-tabs>li.active>a,
.module-blocks-212 .nav-tabs>li.active>a:hover,
.module-blocks-212 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-blocks-212 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-blocks-212 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-blocks-212 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-blocks-212 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-blocks-212 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-blocks-212 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-blocks-212 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-blocks-212 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-blocks-212 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-blocks-212 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-blocks-212 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-blocks-212 .tab-container::before {
    display: none
}

.module-blocks-212 .tab-content {
    padding-top: 20px
}

.module-blocks-212 .tab-container {
    display: block
}

.module-blocks-212 .tab-container .nav-tabs {
    flex-direction: row
}

.module-blocks-212 .block-title {
    order: -2
}

.module-blocks-212 .block-header {
    display: flex;
    float: none;
    order: -1;
    justify-content: flex-start;
    align-items: flex-start
}

.module-blocks-212 .block-header img {
    display: flex
}

.module-blocks-212 .block-wrapper {
    display: flex
}

.module-blocks-212 .block-header i {
    float: none;
    display: flex
}

.module-blocks-212 .block-body {
    display: flex;
    flex-direction: column
}

@media (max-width: 1024px) {
    .module-blocks-212 .swiper-buttons {
        display: none !important
    }
}

@media (max-width: 760px) {
    .module-blocks-212 .swiper-container {
        overflow: visible
    }
}

.module-blocks-212 .module-item-1 .module-title {
    font-size: 15px
}

.module-blocks-212 .module-item-1 .block-header {
    display: flex;
    float: none;
    order: -1;
    justify-content: flex-start;
    align-items: flex-start;
    margin-bottom: 10px
}

.module-blocks-212 .module-item-1 .block-header img {
    display: flex
}

.module-blocks-212 .module-item-1 .block-wrapper {
    display: flex
}

.module-blocks-212 .module-item-1 .block-header i {
    float: none;
    display: flex
}

.module-blocks-212 .module-item-1 .block-body {
    display: flex;
    flex-direction: column
}

.module-blocks-212 .module-item-1 .block-content {
    text-align: left;
    column-count: initial;
    column-gap: 20px;
    column-rule-width: 1px;
    column-rule-style: solid
}

.module-blocks-212 .module-item-1 .expand-content {
    max-height: 100%;
    overflow: visible
}

.module-blocks-212 .module-item-1 .block-footer {
    margin-top: auto;
    padding-top: 10px;
    margin-top: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    text-align: left
}

.module-blocks-212 .module-item-1 .block-footer .btn {
    width: auto;
    transform: scale(calc(80 / 100));
    transform-origin: top left
}

.module-blocks-212 .module-item-1 .block-footer .btn::after {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    margin-left: 5px
}

div.links-menu-206 .title.module-title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

div.links-menu-206 .title.module-title::after {
    display: none
}

div.links-menu-206 .title.module-title.page-title>span::after {
    display: none
}

div.links-menu-206 .module-body {
    display: block;
    justify-content: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-gap: 20px;
    column-rule-style: none
}

div.links-menu-206 .menu-item {
    border-width: 1px 0 0 0;
    flex-grow: 0;
    justify-content: flex-start;
    width: auto
}

div.links-menu-206 .menu-item a .links-text {
    white-space: normal;
    color: rgba(105, 105, 115, 1)
}

div.links-menu-206 .menu-item a {
    justify-content: flex-start;
    width: auto;
    padding-bottom: 4px
}

div.links-menu-206 .menu-item a:hover .links-text {
    color: rgba(233, 102, 49, 1);
    text-decoration: underline
}

div.links-menu-206 .count-badge {
    display: none
}

.phone footer div.links-menu-206 .module-title::before {
    display: block
}

.phone footer div.links-menu-206 .module-title.closed+.module-body>li {
    display: none
}

.phone footer div.links-menu-206 .module-title.closed {
    margin: 0
}

div.links-menu-208 .title.module-title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

div.links-menu-208 .title.module-title::after {
    display: none
}

div.links-menu-208 .title.module-title.page-title>span::after {
    display: none
}

div.links-menu-208 .module-body {
    display: block;
    justify-content: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-gap: 20px;
    column-rule-style: none
}

div.links-menu-208 .menu-item {
    border-width: 1px 0 0 0;
    flex-grow: 0;
    justify-content: flex-start;
    width: auto
}

div.links-menu-208 .menu-item a .links-text {
    white-space: normal;
    color: rgba(105, 105, 115, 1)
}

div.links-menu-208 .menu-item a {
    justify-content: flex-start;
    width: auto;
    padding-bottom: 4px
}

div.links-menu-208 .menu-item a:hover .links-text {
    color: rgba(233, 102, 49, 1);
    text-decoration: underline
}

div.links-menu-208 .count-badge {
    display: none
}

.phone footer div.links-menu-208 .module-title::before {
    display: block
}

.phone footer div.links-menu-208 .module-title.closed+.module-body>li {
    display: none
}

.phone footer div.links-menu-208 .module-title.closed {
    margin: 0
}

div.links-menu-207 .title.module-title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

div.links-menu-207 .title.module-title::after {
    display: none
}

div.links-menu-207 .title.module-title.page-title>span::after {
    display: none
}

div.links-menu-207 .module-body {
    display: block;
    justify-content: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-gap: 30px;
    column-rule-width: 1px;
    column-rule-style: solid
}

div.links-menu-207 .menu-item {
    border-width: 1px 0 0 0;
    flex-grow: 0;
    justify-content: flex-start;
    width: auto
}

div.links-menu-207 .menu-item a .links-text {
    white-space: normal;
    color: rgba(105, 105, 115, 1)
}

div.links-menu-207 .menu-item a {
    justify-content: flex-start;
    width: auto;
    padding-bottom: 4px
}

div.links-menu-207 .menu-item a:hover .links-text {
    color: rgba(233, 102, 49, 1);
    text-decoration: underline
}

div.links-menu-207 .count-badge {
    display: none
}

.phone footer div.links-menu-207 .module-title::before {
    display: block
}

.phone footer div.links-menu-207 .module-title.closed+.module-body>li {
    display: none
}

.phone footer div.links-menu-207 .module-title.closed {
    margin: 0
}

.icons-menu-209 .title.module-title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.icons-menu-209 .title.module-title::after {
    display: none
}

.icons-menu-209 .title.module-title.page-title>span::after {
    display: none
}

.icons-menu-209 a {
    background: rgba(240, 242, 245, 1);
    width: 80px;
    height: 80px
}

.desktop .icons-menu-209 a:hover {
    background: rgba(13, 82, 214, 1)
}

.icons-menu-209 a::before {
    color: rgba(105, 105, 115, 1);
    font-size: 40px
}

.icons-menu-209 .menu-item a {
    border-radius: 3px
}

.desktop .icons-menu-209 a:hover::before {
    color: rgba(255, 255, 255, 1)
}

.icons-menu-209>ul>.menu-item>a .links-text {
    color: rgba(105, 105, 115, 1)
}

.desktop .icons-menu-209>ul>.menu-item>a:hover .links-text {
    color: rgba(255, 255, 255, 1)
}

.icons-menu-209 .links-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.icons-menu-209>ul>.icons-menu-item {
    padding: calc(10px / 2)
}

.icons-menu-209 ul {
    justify-content: flex-start
}

.icons-menu-209 .module-title {
    text-align: left
}

.icons-menu-209 .module-title::after {
    left: 0;
    right: auto;
    transform: none
}

.icons-menu-209 .icons-menu-item-1.icon-menu-icon>a::before {
    content: '\e921' !important;
    font-family: icomoon !important;
    font-size: 45px
}

.icons-menu-209 .icons-menu-item-2.icon-menu-icon>a::before {
    content: '\e909' !important;
    font-family: icomoon !important;
    font-size: 45px
}

.icons-menu-209 .icons-menu-item-3.icon-menu-icon>a::before {
    content: '\e971' !important;
    font-family: icomoon !important
}

.icons-menu-209 .icons-menu-item-4.icon-menu-icon>a::before {
    content: '\e965' !important;
    font-family: icomoon !important;
    font-size: 45px
}

.icons-menu-209 .icons-menu-item-5.icon-menu-icon>a::before {
    content: '\e966' !important;
    font-family: icomoon !important
}

.icons-menu-209 .icons-menu-item-6.icon-menu-icon>a::before {
    content: '\eaf3' !important;
    font-family: icomoon !important
}

.icons-menu-209 .icons-menu-item-7.icon-menu-icon>a::before {
    content: '\e973' !important;
    font-family: icomoon !important
}

.icons-menu-209 .icons-menu-item-8.icon-menu-icon>a::before {
    content: '\eabb' !important;
    font-family: icomoon !important
}

.icons-menu-209 .icons-menu-item-9.icon-menu-icon>a::before {
    content: '\e96d' !important;
    font-family: icomoon !important
}

div.links-menu-205 .module-body {
    padding: 7px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    ;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-gap: 30px;
    column-rule-width: 1px;
    column-rule-style: solid
}

div.links-menu-205 .menu-item {
    border-width: 0 0 0 1px;
    flex-grow: 0;
    justify-content: flex-start;
    width: auto;
    white-space: nowrap
}

div.links-menu-205 .menu-item a .links-text {
    white-space: nowrap;
    font-size: 13px
}

div.links-menu-205 .menu-item a {
    justify-content: flex-start;
    width: auto;
    padding-left: 7px
}

div.links-menu-205 .menu-item a::before {
    content: '\f111' !important;
    font-family: icomoon !important;
    font-size: 3px;
    margin-right: 7px
}

.mobile.touchevents div.links-menu-205 .module-body {
    overflow-x: scroll
}

div.links-menu-205 .module-body::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px
}

div.links-menu-205 .module-body::-webkit-scrollbar-track {
    background-color: white
}

div.links-menu-205 .module-body::-webkit-scrollbar-thumb {
    background-color: #999
}

div.links-menu-205 .count-badge {
    display: none
}

.phone footer div.links-menu-205 .module-title::before {
    display: block
}

.phone footer div.links-menu-205 .module-title.closed+.module-body>li {
    display: none
}

.phone footer div.links-menu-205 .module-title.closed {
    margin: 0
}

div.links-menu-205 .links-menu-item-1>a::before {
    content: none !important
}

div.links-menu-205 .links-menu-item-1 a {
    padding-right: 3px
}

div.links-menu-205 .links-menu-item-1 a .links-text {
    color: rgba(105, 105, 115, 1);
    font-weight: 700;
    text-decoration: none
}

div.links-menu-205 .links-menu-item-1:hover a .links-text {
    text-decoration: none
}

div.links-menu-205 .links-menu-item-2>a::before {
    content: none !important
}

div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a::after {
    display: block
}

div.flyout-menu.flyout-menu-7 .j-menu>li>a {
    font-size: 14px;
    color: rgba(105, 105, 115, 1);
    font-weight: 400;
    background: rgba(240, 242, 245, 1);
    padding: 15px;
    padding-top: 12px;
    padding-bottom: 12px
}

.desktop div.flyout-menu.flyout-menu-7 .j-menu>li:hover>a,
div.flyout-menu.flyout-menu-7 .j-menu>li.active>a {
    color: rgba(51, 51, 51, 1);
    background: rgba(255, 255, 255, 1)
}

div.flyout-menu.flyout-menu-7 .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

div.flyout-menu.flyout-menu-7 .j-menu>li>a::before {
    color: rgba(139, 145, 152, 1);
    margin-right: 7px;
    min-width: 22px;
    font-size: 22px
}

div.flyout-menu.flyout-menu-7 .j-menu a .count-badge {
    display: none;
    position: relative
}

.flyout-menu-7 .flyout-menu-item.drop-menu>.j-dropdown {
    left: 0;
    right: auto;
    transform: translate3d(0, -10px, 0)
}

.flyout-menu-7 .flyout-menu-item.drop-menu.animating>.j-dropdown {
    left: 0;
    right: auto;
    transform: none
}

.flyout-menu-7 .flyout-menu-item.drop-menu>.j-dropdown::before {
    left: 10px;
    right: auto;
    transform: translateX(0)
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a>.count-badge {
    margin-right: 0
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
    margin-left: 7px
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a::after {
    display: block
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li>a {
    font-size: 14px;
    color: rgba(58, 71, 84, 1);
    font-weight: 400;
    background: rgba(255, 255, 255, 1);
    padding: 10px;
    padding-left: 15px
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li>a::before {
    margin-right: 7px;
    min-width: 20px;
    font-size: 18px
}

.desktop .flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li:hover>a,
.flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li.active>a {
    background: rgba(240, 242, 245, 1)
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li>a,
.flyout-menu-7 .flyout-menu-item.dropdown.accordion-menu .menu-item>a+div,
.flyout-menu-7 .flyout-menu-item.dropdown .accordion-menu .menu-item>a+div {
    border-style: none
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-menu a .count-badge {
    display: none;
    position: relative
}

.flyout-menu-7 .flyout-menu-item.dropdown:not(.mega-menu) .j-dropdown {
    min-width: 200px
}

.flyout-menu-7 .flyout-menu-item.dropdown:not(.mega-menu) .j-menu {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

.flyout-menu-7 .flyout-menu-item.dropdown .j-dropdown::before {
    display: block;
    border-bottom-color: rgba(255, 255, 255, 1);
    margin-left: 7px;
    margin-top: -10px
}

.flyout-menu-7 .mega-menu-content {
    background: rgba(255, 255, 255, 1)
}

.flyout-menu-7 .j-dropdown>.mega-menu-content {
    box-shadow: 30px 40px 90px -10px rgba(0, 0, 0, 0.2)
}

@media (max-width: 1024px) {
    div.flyout-menu.flyout-menu-7 .j-menu>li>a {
        background: none
    }

    .flyout-menu-7 .j-dropdown>.mega-menu-content {
        max-height: 500px !important;
        overflow-y: auto
    }
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-1>a::before {
    content: '\e8d2' !important;
    font-family: icomoon !important;
    font-size: 20px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-1 .dropdown-menu {
    width: 900px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-1.multi-level .dropdown-menu {
    left: 100%
}

.flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 {
    background-image: url('image/cache/catalog/journal3/misc/menu2-252x312.png');
    background-position: right bottom;
    background-repeat: no-repeat
}

.flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 {
        background: none
    }
}

.flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 {
    width: 80%;
    padding: 10px
}

.flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%;
        padding: 0px
    }
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-2>a::before {
    content: '\f179' !important;
    font-family: icomoon !important;
    font-size: 18px;
    top: -1px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-2 .dropdown-menu {
    width: 900px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-2.multi-level .dropdown-menu {
    left: 100%
}

.flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 {
    background-image: url('image/cache/catalog/journal3/misc/menubg3-344x351.jpg');
    background-position: right bottom;
    background-repeat: no-repeat
}

.flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 {
        background: none
    }
}

.flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 {
    width: 80%;
    padding: 10px
}

.flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%;
        padding: 0px
    }
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-3>a::before {
    content: '\e91f' !important;
    font-family: icomoon !important;
    font-size: 18px;
    top: -1px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-3 .dropdown-menu {
    width: 800px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-3.multi-level .dropdown-menu {
    left: 100%
}

.flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
    width: 30%
}

.flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%;
        padding: 10px
    }
}

.flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
    width: 70%;
    padding: 15px
}

.flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
    }
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-4>a::before {
    content: '\e999' !important;
    font-family: icomoon !important;
    font-size: 17px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-4 .dropdown-menu {
    width: 800px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-4.multi-level .dropdown-menu {
    left: 100%
}

.flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-1 {
    width: 70%;
    padding: 15px
}

.flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
    }
}

.flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-2 {
    width: 30%;
    background: rgba(240, 242, 245, 1);
    padding: 15px;
    padding-right: 20px;
    padding-left: 20px
}

.flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .flyout-menu-7 .flyout-menu-item-4.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
    }
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-5>a::before {
    content: '\e993' !important;
    font-family: icomoon !important;
    font-size: 15px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-5 .dropdown-menu {
    width: 800px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-5.multi-level .dropdown-menu {
    left: 100%
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 {
    padding: 20px
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-1 {
    width: 20%;
    padding-right: 10px
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-2 {
    width: 20%;
    padding-right: 10px
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-2 .grid-items {
    justify-content: flex-start
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-3 {
    width: 20%;
    padding-right: 10px
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-3 .grid-items {
    justify-content: flex-start
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-4 {
    width: 40%
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-4 .grid-items {
    justify-content: flex-start
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-2 {
    background: rgba(240, 242, 245, 1)
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-2::before {
    display: block;
    left: 0;
    width: 100vw
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-2 .grid-col-1 {
    width: 100%
}

.flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-2 .grid-col-1 .grid-items {
    justify-content: flex-start
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-6>a .menu-label {
    background: rgba(80, 173, 85, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px
}

.flyout-menu-7>ul.j-menu>li.flyout-menu-item-6>a::before {
    content: '\e998' !important;
    font-family: icomoon !important;
    font-size: 15px
}

.flyout-menu-7 .mega-menu.flyout-menu-item-6 .dropdown-menu {
    width: 800px
}

.desktop-header-active .flyout-menu-7 .flyout-menu-item-6.multi-level .dropdown-menu {
    left: 100%
}

div.links-menu-210 .title.module-title {
    font-size: 15px;
    border-width: 0px;
    padding: 0px;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

div.links-menu-210 .title.module-title::after {
    display: none
}

div.links-menu-210 .title.module-title.page-title>span::after {
    display: none
}

div.links-menu-210 .module-body {
    padding-bottom: 10px;
    display: block;
    justify-content: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: 4;
    column-gap: 30px;
    column-rule-color: rgba(226, 226, 226, 1);
    column-rule-width: 1px;
    column-rule-style: solid
}

div.links-menu-210 .menu-item {
    border-width: 1px 0 0 0;
    flex-grow: 0;
    justify-content: flex-start;
    width: auto
}

div.links-menu-210 .menu-item a .links-text {
    white-space: normal;
    color: rgba(105, 105, 115, 1)
}

div.links-menu-210 .menu-item a {
    justify-content: flex-start;
    width: auto;
    padding-bottom: 4px;
    padding-left: 10px
}

div.links-menu-210 .menu-item a:hover .links-text {
    color: rgba(13, 82, 214, 1);
    text-decoration: underline
}

div.links-menu-210 .count-badge {
    display: none
}

.phone footer div.links-menu-210 .module-title::before {
    display: block
}

.phone footer div.links-menu-210 .module-title.closed+.module-body>li {
    display: none
}

.phone footer div.links-menu-210 .module-title.closed {
    margin: 0
}

@media (max-width: 1024px) {
    div.links-menu-210 .module-body {
        column-count: 2
    }
}

div.links-menu-210 .links-menu-item-4 .menu-label {
    margin-right: calc(0px - (5px))
}

div.links-menu-210 .links-menu-item-13 .menu-label {
    background: rgba(13, 82, 214, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px;
    margin-right: calc(0px - (5px))
}

div.links-menu-210 .links-menu-item-15 .menu-label {
    background: rgba(80, 173, 85, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px;
    margin-right: calc(0px - (5px))
}

div.links-menu-210 .links-menu-item-18 .menu-label {
    color: rgba(51, 51, 51, 1);
    background: rgba(254, 212, 48, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px;
    margin-right: calc(0px - (5px))
}

.module-banners-98 .swiper-container {
    overflow: hidden
}

.module-banners-98 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-banners-98:hover .swiper-buttons {
    display: block
}

.module-banners-98 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-banners-98 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-banners-98 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-banners-98 .swiper-button-disabled {
    opacity: 0
}

.module-banners-98 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-banners-98 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-banners-98 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-banners-98 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-banners-98 .swiper {
    padding-bottom: 15px
}

.module-banners-98 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-banners-98 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-banners-98 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-banners-98 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-banners-98 .swiper-pagination>span {
    border-radius: 50px
}

.module-banners-98 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.module-banners-98 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.one-column #content .module-banners-98 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-banners-98 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-banners-98 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-banners-98 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-banners-98 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-banners-98 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-banners-98 a img {
    transform: scale(1)
}

.module-banners-98 .module-item>a::before {
    background: rgba(0, 0, 0, 0.3)
}

.module-banners-98 a::before {
    opacity: 0
}

.desktop .module-banners-98 a:hover::before {
    opacity: 1
}

.module-banners-98 .module-item>a::after {
    content: '\e5c8' !important;
    font-family: icomoon !important
}

.module-banners-98 .banner-caption {
    visibility: hidden;
    opacity: 0;
    display: block
}

.desktop .module-banners-98 a:hover .banner-caption {
    visibility: visible;
    opacity: 1
}

.module-banners-98 .banner-caption span {
    white-space: normal;
    ;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    padding: 20px
}

.module-banners-98 .banner-caption-2 span {
    white-space: normal
}

.module-banners-98 .banner-caption-3 span {
    white-space: normal
}

@media (max-width: 1024px) {
    .module-banners-98 .swiper-buttons {
        display: none !important
    }
}

@media (max-width: 760px) {
    .module-banners-98 .swiper-container {
        overflow: visible
    }
}

.module-catalog-264 .module-item.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.module-catalog-264 .module-item:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.one-column #content .module-catalog-264 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-catalog-264 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-catalog-264 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-catalog-264 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-catalog-264 .module-item.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-catalog-264 .module-item:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-catalog-264 .catalog-title {
    margin-bottom: 8px;
    display: flex;
    font-family: 'Montserrat';
    font-weight: 700;
    color: rgba(51, 51, 51, 1);
    text-transform: uppercase;
    width: auto;
    margin-left: 0;
    margin-right: auto;
    justify-content: flex-start;
    white-space: normal;
    overflow: visible;
    text-overflow: initial
}

.module-catalog-264 .subitems {
    align-items: flex-start
}

.module-catalog-264 .subitem>a span {
    font-size: 14px;
    color: rgba(105, 105, 115, 1)
}

.module-catalog-264 .subitem>a:hover span {
    color: rgba(13, 82, 214, 1);
    text-decoration: underline
}

.module-catalog-264 .subitem.view-more a span {
    color: rgba(105, 105, 115, 1);
    font-weight: 700;
    text-decoration: underline
}

.module-catalog-264 .subitem.view-more a:hover span {
    color: rgba(15, 58, 141, 1)
}

.module-catalog-264 .subitem>a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-bottom: 6px
}

.module-catalog-264 .catalog-image img {
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px
}

.module-catalog-264 .catalog-image {
    margin-right: 10px
}

.module-catalog-264 .item-assets {
    flex-direction: row
}

.module-catalog-264 .item-assets>a {
    max-width: 40%;
    order: 0
}

.module-catalog-264 .item-assets .subitems {
    width: 60%
}

.module-catalog-264 .item-assets .catalog-image {
    display: block
}

@media (max-width: 1024px) {
    .module-catalog-264 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-catalog-264 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .module-catalog-264 div.item-assets {
        flex-direction: column
    }

    .module-catalog-264 div.item-assets>a {
        max-width: 100%;
        order: 0
    }

    .module-catalog-264 div.item-assets .subitems {
        width: 100%
    }

    .module-catalog-264 div.item-assets .catalog-image {
        display: block
    }
}

@media (max-width: 760px) {
    .module-catalog-264 .subitem>a {
        padding-bottom: 10px
    }
}

.module-products-186 .swiper-container {
    overflow: hidden
}

.module-products-186 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-products-186:hover .swiper-buttons {
    display: block
}

.module-products-186 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-products-186 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-products-186 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-products-186 .swiper-button-disabled {
    opacity: 0
}

.module-products-186 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-186 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-products-186 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-products-186 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-products-186 .swiper {
    padding-bottom: 15px
}

.module-products-186 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-products-186 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-products-186 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-products-186 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-products-186 .swiper-pagination>span {
    border-radius: 50px
}

.module-products-186 .nav-tabs>li>a,
.module-products-186 .nav-tabs>li.active>a,
.module-products-186 .nav-tabs>li.active>a:hover,
.module-products-186 .nav-tabs>li.active>a:focus {
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 14px;
    color: rgba(139, 145, 152, 1);
    text-transform: uppercase
}

.desktop .module-products-186 .nav-tabs>li:hover>a,
.module-products-186 .nav-tabs>li.active>a {
    color: rgba(51, 51, 51, 1)
}

.module-products-186 .nav-tabs>li.active>a,
.module-products-186 .nav-tabs>li.active>a:hover,
.module-products-186 .nav-tabs>li.active>a:focus {
    color: rgba(51, 51, 51, 1)
}

.module-products-186 .nav-tabs>li {
    border-width: 0;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0);
    flex-grow: 0
}

.module-products-186 .nav-tabs>li.active {
    border-color: rgba(233, 102, 49, 1)
}

.module-products-186 .nav-tabs>li.active::after {
    display: none;
    border-top-width: 10px
}

.module-products-186 .nav-tabs>li>a {
    justify-content: center;
    white-space: nowrap;
    padding: 0px;
    padding-bottom: 8px
}

.module-products-186 .nav-tabs>li>a::before {
    font-size: 18px
}

.module-products-186 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    ;
    min-width: 50px
}

.module-products-186 .nav-tabs>li:not(:last-child) {
    margin-right: 20px
}

.module-products-186 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-products-186 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 1px;
    width: 1px
}

.module-products-186 .nav-tabs::-webkit-scrollbar-track {
    background-color: white;
    background-color: rgba(238, 238, 238, 1)
}

.module-products-186 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999;
    background-color: rgba(139, 145, 152, 1)
}

.module-products-186 .tab-container::before {
    display: none
}

.module-products-186 .tab-content {
    padding-top: 20px
}

.module-products-186 .tab-container {
    display: block
}

.module-products-186 .tab-container .nav-tabs {
    flex-direction: row
}

.module-products-186 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.module-products-186 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.one-column #content .module-products-186 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.one-column #content .module-products-186 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.two-column #content .module-products-186 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.two-column #content .module-products-186 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.side-column .module-products-186 .product-layout.swiper-slide {
    margin-right: 0px;
    width: calc((100% - 0 * 0px) / 1 - 0.01px)
}

.side-column .module-products-186 .product-layout:not(.swiper-slide) {
    padding: 0px;
    width: calc(100% / 1 - 0.01px)
}

.module-products-186 .module-body>.module-item {
    margin-bottom: 20px
}

.module-products-186 .product-grid .product-thumb {
    background: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    padding: 5px
}

.module-products-186 .product-grid .product-thumb:hover .product-img>div {
    transform: scale(1.12)
}

.module-products-186 .product-grid .product-thumb .product-labels {
    visibility: visible;
    opacity: 1
}

.module-products-186 .product-grid .product-thumb .quickview-button {
    display: flex;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    transform: translate3d(-50%, -50%, 1px)
}

.module-products-186 .product-grid .product-thumb .btn-quickview {
    visibility: hidden;
    opacity: 0;
    transform: scale(.88);
    width: 35px;
    height: 35px
}

.module-products-186 .product-grid .product-thumb:hover .btn-quickview {
    visibility: visible;
    opacity: 1;
    transform: scale(1)
}

.module-products-186 .product-grid .product-thumb .btn-quickview .btn-text {
    display: none
}

.module-products-186 .product-grid .product-thumb .btn-quickview::before {
    display: inline-block;
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 16px
}

.module-products-186 .product-grid .product-thumb .image .btn,
.module-products-186 .product-grid .product-thumb .image .btn:visited {
    font-size: 13px;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: uppercase
}

.module-products-186 .product-grid .product-thumb .image .btn:hover {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(13, 82, 214, 1) !important
}

.module-products-186 .product-grid .product-thumb .image .btn:active,
.module-products-186 .product-grid .product-thumb .image .btn:hover:active,
.module-products-186 .product-grid .product-thumb .image .btn:focus:active {
    color: rgba(255, 255, 255, 1) !important;
    background: rgba(15, 58, 141, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-186 .product-grid .product-thumb .image .btn:focus {
    color: rgba(255, 255, 255, 1) !important;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
}

.module-products-186 .product-grid .product-thumb .image .btn {
    background: rgba(15, 58, 141, 1);
    border-width: 2px;
    padding: 13px;
    padding-right: 18px;
    padding-left: 18px;
    border-radius: 3px !important
}

.desktop .module-products-186 .product-grid .product-thumb .image .btn:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-products-186 .product-grid .product-thumb .image .btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid .product-thumb .countdown {
    display: none;
    visibility: visible;
    opacity: 1;
    transform: translate3d(-50%, 0, 1px) scale(1)
}

.module-products-186 .product-grid.product-list .product-layout .image {
    float: left;
    height: 100%
}

.module-products-186 .product-grid .product-thumb .stats {
    display: none;
    justify-content: space-between;
    padding: 5px;
    padding-right: 8px;
    padding-bottom: 4px;
    padding-left: 8px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-186 .product-grid .stat-1 .stats-label {
    display: none
}

.module-products-186 .product-grid .stat-2 .stats-label {
    display: none
}

.module-products-186 .product-grid.product-grid .product-thumb .rating {
    position: absolute;
    visibility: hidden;
    opacity: 0;
    top: 0
}

.module-products-186 .product-grid.product-grid .product-thumb:hover .rating {
    visibility: visible;
    opacity: 1
}

.module-products-186 .product-grid.product-grid .product-thumb .rating-stars {
    position: absolute;
    visibility: visible;
    opacity: 1;
    transform: translateY(-50%)
}

.module-products-186 .product-grid .product-thumb .rating {
    justify-content: center;
    display: flex
}

.module-products-186 .product-grid .product-thumb .rating.no-rating {
    display: none
}

.module-products-186 .product-grid .product-thumb .rating .fa-stack {
    font-size: 10px;
    width: 1.1em
}

.module-products-186 .product-grid .product-thumb .rating-stars {
    padding-bottom: 10px
}

.module-products-186 .product-grid .product-thumb .rating.no-rating span {
    opacity: 0.5
}

.module-products-186 .product-grid .product-thumb .name {
    display: flex;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    justify-content: flex-start;
    margin-left: 0;
    margin-right: auto;
    padding-top: 8px;
    padding-bottom: 5px;
    padding-left: 8px
}

.module-products-186 .product-grid .product-thumb .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    text-align: left;
    text-align: left
}

.module-products-186 .product-grid .product-thumb .description {
    display: none;
    padding: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-width: 0;
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-style: solid
}

.module-products-186 .product-grid .product-thumb .price {
    display: block;
    font-size: 15px;
    width: auto;
    margin-left: auto;
    margin-right: auto;
    margin-left: 0;
    margin-right: auto;
    text-align: left;
    justify-content: flex-start;
    padding: 8px;
    padding-top: 0px
}

.module-products-186 .product-grid .product-thumb .price-tax {
    display: none;
    font-size: 12px;
    text-align: left
}

.module-products-186 .product-grid .product-thumb .price-old {
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through;
    margin: 0;
    order: 2
}

.module-products-186 .product-grid .product-thumb .price>div {
    align-items: center;
    flex-direction: row
}

.module-products-186 .product-grid .product-thumb .price-new {
    margin: 0 7px 0 0;
    order: 1
}

.module-products-186 .product-grid .product-thumb .buttons-wrapper {
    display: block
}

.module-products-186 .product-grid .product-thumb .button-group {
    justify-content: space-between
}

.module-products-186 .product-grid.product-grid .product-thumb .button-group {
    padding: 8px;
    padding-bottom: 5px;
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-products-186 .product-grid .product-thumb .cart-group {
    display: inline-flex
}

.module-products-186 .product-grid .product-thumb .btn-wishlist {
    width: 35px;
    height: 35px;
    display: inline-flex;
    margin-right: 5px;
    margin-left: 5px
}

.module-products-186 .product-grid .product-thumb .btn-compare {
    width: 35px;
    height: 35px;
    display: inline-flex
}

.module-products-186 .product-grid .product-thumb .btn-cart::before {
    display: none;
    font-size: 16px;
    left: 2px;
    margin-right: 2px
}

.module-products-186 .product-grid .product-thumb .btn-cart .btn-text {
    display: inline-block;
    padding: 0
}

.module-products-186 .product-grid.product-grid .product-thumb .btn-cart {
    flex: initial
}

.module-products-186 .product-grid.product-grid .product-thumb .cart-group {
    flex: initial
}

.module-products-186 .product-grid .product-thumb .btn-cart.btn,
.module-products-186 .product-grid .product-thumb .btn-cart.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-186 .product-grid .product-thumb .btn-cart.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-186 .product-grid .product-thumb .btn-cart.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .btn-cart.btn:active,
.module-products-186 .product-grid .product-thumb .btn-cart.btn:hover:active,
.module-products-186 .product-grid .product-thumb .btn-cart.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .btn-cart.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid .product-thumb .stepper {
    display: none;
    margin-right: 5px;
    height: 36px
}

.module-products-186 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
    margin: -10px;
    margin-top: 10px
}

.module-products-186 .product-grid .button-group-bottom .wish-group-bottom {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid
}

.module-products-186 .product-grid .product-thumb .btn-wishlist::before {
    display: inline-block;
    font-size: 15px
}

.module-products-186 .product-grid .product-thumb .btn-wishlist .btn-text {
    display: none
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn,
.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:active,
.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:hover:active,
.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-186 .product-grid .product-thumb .btn-wishlist.btn:hover {
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid .product-thumb .btn-compare::before {
    display: inline-block;
    font-size: 14px
}

.module-products-186 .product-grid .product-thumb .btn-compare .btn-text {
    display: none
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn,
.module-products-186 .product-grid .product-thumb .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn:active,
.module-products-186 .product-grid .product-thumb .btn-compare.btn:hover:active,
.module-products-186 .product-grid .product-thumb .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-products-186 .product-grid .product-thumb .btn-compare.btn:hover {
    box-shadow: none
}

.module-products-186 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid .product-thumb .extra-group {
    display: none
}

.module-products-186 .product-grid .product-thumb .extra-group .btn:first-child {
    display: inline-flex
}

.module-products-186 .product-grid .product-thumb .extra-group .btn-extra+.btn {
    display: inline-flex
}

.module-products-186 .product-grid .product-thumb .extra-group .btn:first-child::before {
    display: inline-block
}

.module-products-186 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn::before {
    display: inline-block
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
    display: inline-block;
    padding: 0 .4em
}

.module-products-186 .product-grid .product-layout .extra-group>div {
    justify-content: space-between
}

.module-products-186 .product-grid .product-thumb .extra-group>div {
    padding: 4px
}

.module-products-186 .product-grid .product-thumb .extra-group .btn.btn,
.module-products-186 .product-grid .product-thumb .extra-group .btn.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-186 .product-grid .product-thumb .extra-group .btn.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-186 .product-grid .product-thumb .extra-group .btn.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn.btn:active,
.module-products-186 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
.module-products-186 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn,
.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px
}

.desktop .module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-products-186 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
    font-size: 20px
}

.module-products-186 .product-grid.product-grid .product-thumb .extra-group {
    position: static;
    margin-top: initial
}

.module-products-186 .product-grid.product-grid .product-thumb .extra-group>div {
    position: static;
    transform: none;
    opacity: 1
}

.module-products-186 .product-grid.product-grid .product-thumb .buttons-wrapper {
    position: static;
    width: auto;
    overflow: visible;
    order: initial;
    margin-top: auto;
    transform: none
}

.module-products-186 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none
}

.module-products-186 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
    transform: none
}

.module-products-186 .product-grid.product-grid .wish-group {
    position: static;
    width: auto;
    top: auto;
    visibility: visible;
    opacity: 1;
    transform: translate3d(0, 0, 0);
    justify-content: flex-start
}

.module-products-186 .product-grid .product-thumb .btn-quickview.btn {
    border-radius: 50px !important
}

@media (max-width: 1024px) {
    .module-products-186 .swiper-buttons {
        display: none !important
    }

    .module-products-186 .product-grid .product-thumb .btn-quickview {
        visibility: visible;
        opacity: 1
    }
}

@media (max-width: 760px) {
    .module-products-186 .swiper-container {
        overflow: visible
    }
}

div.main-menu.main-menu-3>.j-menu .menu-item.main-menu-item-1>a::before {
    content: '\e8d2' !important;
    font-family: icomoon !important;
    font-size: 20px;
    top: -1px;
    margin-right: 5px
}

div.main-menu.main-menu-3>.j-menu li.main-menu-item-1>a {
    color: rgba(51, 51, 51, 1) !important;
    background: rgba(254, 212, 48, 1)
}

.desktop div.main-menu.main-menu-3>.j-menu li.main-menu-item-1:hover>a {
    background: rgba(240, 242, 245, 1)
}

div.main-menu.main-menu-3>.j-menu>.main-menu-item-1>a {
    padding-left: 16px !important;
    min-width: 230px
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-1 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-1>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-1:not(.mega-fullwidth)>.dropdown-menu::before {
    display: none;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-1.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

.main-menu-3>.j-menu li.main-menu-item-1>a>.menu-label {
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    text-transform: none;
    background: rgba(233, 102, 49, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px
}

.desktop-main-menu-wrapper .main-menu-3 .main-menu-item-1>a>.menu-label {
    margin-right: calc(0px - (-7px));
    margin-top: -7px
}

@media (max-width: 1024px) {
    div.main-menu.main-menu-3>.j-menu li.main-menu-item-1>a {
        background: none
    }

    div.main-menu.main-menu-3>.j-menu>.main-menu-item-1>a {
        padding-left: 0px !important
    }
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-2 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-2>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-2:not(.mega-fullwidth)>.dropdown-menu::before {
    display: none;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-2.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-3 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-3>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-3:not(.mega-fullwidth)>.dropdown-menu::before {
    display: block;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-3.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

.main-menu-3>.j-menu li.main-menu-item-3>a>.menu-label {
    color: rgba(51, 51, 51, 1);
    background: rgba(254, 212, 48, 1);
    padding: 1px;
    padding-right: 5px;
    padding-left: 5px
}

.desktop-main-menu-wrapper .main-menu-3 .main-menu-item-3>a>.menu-label {
    margin-right: calc(0px - (-7px));
    margin-top: -7px
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 {
    padding: 10px
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 {
        padding: 0px
    }
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
    width: 80%;
    padding: 10px
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%;
        padding: 0px;
        padding-bottom: 20px
    }
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
    width: 20%;
    border-width: 0;
    border-left-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding: 20px;
    padding-right: 10px
}

.main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%;
        border-style: none;
        padding: 0px
    }
}

.desktop-main-menu-wrapper .menu-fullwidth>.j-dropdown {
    width: 100vw;
    left: 50%;
    margin-left: -50vw
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-4 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-4>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-4:not(.mega-fullwidth)>.dropdown-menu::before {
    display: block;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-4.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

.main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 {
    padding: 10px
}

.main-menu-3 .main-menu-item-4.mega-menu .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 {
        padding: 0px
    }
}

.main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 .grid-col-1 {
    width: 66.66666666666666%;
    padding: 20px;
    padding-left: 0px
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%;
        padding: 0px;
        padding-bottom: 20px
    }
}

.main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 .grid-col-2 {
    width: 33.33333333333333%;
    padding: 20px
}

.main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 .grid-col-2 .grid-items {
    justify-content: flex-start
}

@media (max-width: 1024px) {
    .main-menu-3 .main-menu-item-4.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%;
        padding: 0px
    }
}

div.main-menu.main-menu-64>.j-menu .menu-item.main-menu-item-1>a::before {
    content: '\eb97' !important;
    font-family: icomoon !important;
    font-size: 20px
}

div.main-menu.main-menu-64>.j-menu li.main-menu-item-1>a {
    font-size: 15px !important
}

div.main-menu.main-menu-64>.j-menu>.main-menu-item-1>a {
    padding-right: 20px !important
}

.desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-1 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-1>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-1:not(.mega-fullwidth)>.dropdown-menu::before {
    display: block;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-1.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

div.main-menu.main-menu-64>.j-menu .menu-item.main-menu-item-2>a::before {
    content: '\e946' !important;
    font-family: icomoon !important;
    margin-right: 7px
}

div.main-menu.main-menu-64>.j-menu li.main-menu-item-2>a {
    color: rgba(51, 51, 51, 1) !important;
    background: rgba(254, 212, 48, 1)
}

.desktop div.main-menu.main-menu-64>.j-menu li.main-menu-item-2:hover>a {
    background: rgba(255, 255, 255, 1)
}

div.main-menu.main-menu-64>.j-menu>.main-menu-item-2>a {
    padding: 15px !important
}

.desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-2 .mega-menu-content {
    width: 500px;
    position: relative;
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-2>.dropdown-menu::before {
    left: 0;
    transform: none
}

.desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-2:not(.mega-fullwidth)>.dropdown-menu::before {
    display: block;
    margin-top: -10px
}

.desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-2.multi-level .dropdown-menu ul li .dropdown-menu {
    left: 100%
}

.top-menu-2 .j-menu li.top-menu-item-1>a::before {
    content: '\eb69' !important;
    font-family: icomoon !important;
    top: -1px
}

.top-menu-2>ul>.top-menu-item-1>a {
    text-align: left
}

.top-menu-2>ul>.top-menu-item-1>a>.links-text {
    display: block
}

.top-menu-2>ul>.top-menu-item-1>a .count-badge {
    position: relative
}

.top-menu-2 .j-menu li.top-menu-item-2>a::before {
    content: '\e97e' !important;
    font-family: icomoon !important;
    top: -1px
}





.top-menu-2>ul>.top-menu-item-2>a {
    text-align: left
}

.top-menu-2>ul>.top-menu-item-2>a>.links-text {
    display: block
}

.top-menu-2>ul>.top-menu-item-2>a .count-badge {
    position: relative
}

.top-menu-2 .j-menu li.top-menu-item-3>a::before {
    content: '\eb79' !important;
    font-family: icomoon !important
}

.top-menu-2>ul>.top-menu-item-3>a {
    text-align: left
}

.top-menu-2>ul>.top-menu-item-3>a>.links-text {
    display: block
}

.top-menu-2>ul>.top-menu-item-3>a .count-badge {
    position: relative
}

.top-menu-2 .j-menu li.top-menu-item-4>a::before {
    content: '\f29c' !important;
    font-family: icomoon !important;
    top: -1px
}

.top-menu-2>ul>.top-menu-item-4>a {
    text-align: left
}

.top-menu-2>ul>.top-menu-item-4>a>.links-text {
    display: block
}

.top-menu-2>ul>.top-menu-item-4>a .count-badge {
    position: relative
}

.top-menu-2 .j-menu .j-menu li.top-menu-item-5>a::before {
    content: '\e5c8' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.top-menu-2 .j-menu .j-menu li.top-menu-item-6>a::before {
    content: '\e984' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.top-menu-2 .j-menu .j-menu li.top-menu-item-7>a::before {
    content: '\e901' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.top-menu-240 .j-menu li.top-menu-item-1>a::before {
    content: '\ead9' !important;
    font-family: icomoon !important
}

.top-menu-240>ul>.top-menu-item-1>a {
    text-align: left
}

.top-menu-240>ul>.top-menu-item-1>a>.links-text {
    display: block
}

.top-menu-240>ul>.top-menu-item-1>a .count-badge {
    position: relative
}

.top-menu-240 .j-menu li.top-menu-item-2>a::before {
    content: '\e90d' !important;
    font-family: icomoon !important
}

.top-menu-240>ul>.top-menu-item-2>a {
    text-align: left
}

.top-menu-240>ul>.top-menu-item-2>a>.links-text {
    display: block
}

.top-menu-240>ul>.top-menu-item-2>a .count-badge {
    position: relative
}

.top-menu-240 .j-menu li.top-menu-item-5>a::before {
    content: '\eaa7' !important;
    font-family: icomoon !important
}

.top-menu-240>ul>.top-menu-item-5>a {
    text-align: left
}

.top-menu-240>ul>.top-menu-item-5>a>.links-text {
    display: block
}

.top-menu-240>ul>.top-menu-item-5>a .count-badge {
    position: relative
}

.top-menu-240 .j-menu li.top-menu-item-6>a::before {
    content: '\eab6' !important;
    font-family: icomoon !important
}

.top-menu-240>ul>.top-menu-item-6>a {
    text-align: left
}

.top-menu-240>ul>.top-menu-item-6>a>.links-text {
    display: block
}

.top-menu-240>ul>.top-menu-item-6>a .count-badge {
    position: relative
}

.top-menu-14 .j-menu li.top-menu-item-1>a::before {
    content: '\e912' !important;
    font-family: icomoon !important
}

.top-menu-14>ul>.top-menu-item-1>a {
    text-align: left
}

.top-menu-14>ul>.top-menu-item-1>a>.links-text {
    display: block
}

.top-menu-14>ul>.top-menu-item-1>a .count-badge {
    position: relative
}

.top-menu-14 .j-menu li.top-menu-item-6>a::before {
    content: '\eab8' !important;
    font-family: icomoon !important
}

.top-menu-14>ul>.top-menu-item-6>a {
    text-align: left
}

.top-menu-14>ul>.top-menu-item-6>a>.links-text {
    display: block
}

.top-menu-14>ul>.top-menu-item-6>a .count-badge {
    position: relative
}

.top-menu-13 .j-menu li.top-menu-item-1>a::before {
    content: '\ead9' !important;
    font-family: icomoon !important
}

.top-menu-13>ul>.top-menu-item-1>a {
    text-align: left
}

.top-menu-13>ul>.top-menu-item-1>a>.links-text {
    display: block
}

.top-menu-13>ul>.top-menu-item-1>a .count-badge {
    position: relative
}

.top-menu-13 .j-menu li.top-menu-item-2>a::before {
    content: '\e90d' !important;
    font-family: icomoon !important
}

.top-menu-13>ul>.top-menu-item-2>a {
    text-align: left
}

.top-menu-13>ul>.top-menu-item-2>a>.links-text {
    display: block
}

.top-menu-13>ul>.top-menu-item-2>a .count-badge {
    position: relative
}

footer .grid-row-1 {
    background: rgba(58, 71, 84, 1);
    padding: 30px
}

footer .grid-row-1::before {
    display: block;
    left: 0;
    width: 100vw
}

@media (max-width: 1300px) {
    footer .grid-row-1 {
        padding: 20px
    }
}

footer .grid-row-1 .grid-col-1 {
    width: 100%
}

footer .grid-row-1 .grid-col-1 .grid-items {
    justify-content: flex-start
}

footer .grid-row-1 .grid-col-1 .grid-item {
    height: auto
}

footer .grid-row-2 {
    background: rgba(238, 238, 238, 1);
    padding: 15px;
    padding-right: 5px;
    padding-left: 5px
}

footer .grid-row-2::before {
    display: block;
    left: 0;
    width: 100vw
}

footer .grid-row-2 .grid-col-1 {
    width: 100%
}

footer .grid-row-2 .grid-col-1 .grid-items {
    justify-content: flex-start
}

footer .grid-row-2 .grid-col-1 .grid-item {
    height: auto
}

footer .grid-row-3 {
    padding: 20px;
    padding-right: 0px;
    padding-left: 0px
}

footer .grid-row-3::before {
    display: block;
    left: 0;
    width: 100vw
}

footer .grid-row-3 .grid-col-1 {
    width: 25%;
    border-width: 0;
    border-right-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding: 20px;
    padding-top: 0px
}

footer .grid-row-3 .grid-col-1 .grid-items {
    justify-content: flex-start
}

footer .grid-row-3 .grid-col-1 .grid-item {
    height: auto
}

@media (max-width: 1024px) {
    footer .grid-row-3 .grid-col-1 {
        width: 50%
    }
}

@media (max-width: 760px) {
    footer .grid-row-3 .grid-col-1 {
        width: 100%
    }
}

footer .grid-row-3 .grid-col-2 {
    width: 25%;
    border-width: 0;
    border-right-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding: 20px;
    padding-top: 0px
}

footer .grid-row-3 .grid-col-2 .grid-items {
    justify-content: flex-start
}

footer .grid-row-3 .grid-col-2 .grid-item {
    height: auto
}

@media (max-width: 1024px) {
    footer .grid-row-3 .grid-col-2 {
        width: 50%
    }
}

@media (max-width: 760px) {
    footer .grid-row-3 .grid-col-2 {
        width: 100%
    }
}

footer .grid-row-3 .grid-col-3 {
    width: 25%;
    border-width: 0;
    border-right-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    padding: 20px;
    padding-top: 0px
}

footer .grid-row-3 .grid-col-3 .grid-items {
    justify-content: flex-start
}

footer .grid-row-3 .grid-col-3 .grid-item {
    height: auto
}

@media (max-width: 1024px) {
    footer .grid-row-3 .grid-col-3 {
        width: 50%
    }
}

@media (max-width: 760px) {
    footer .grid-row-3 .grid-col-3 {
        width: 100%
    }
}

footer .grid-row-3 .grid-col-4 {
    width: 25%;
    padding: 20px;
    padding-top: 0px
}

footer .grid-row-3 .grid-col-4 .grid-items {
    justify-content: flex-start
}

footer .grid-row-3 .grid-col-4 .grid-item {
    height: auto
}

@media (max-width: 1024px) {
    footer .grid-row-3 .grid-col-4 {
        width: 50%
    }
}

@media (max-width: 760px) {
    footer .grid-row-3 .grid-col-4 {
        width: 100%
    }
}

footer .grid-row-4 {
    background: rgba(58, 71, 84, 1);
    padding: 20px;
    padding-bottom: 15px
}

footer .grid-row-4::before {
    display: block;
    left: 0;
    width: 100vw
}

footer .grid-row-4 .grid-col-1 {
    width: 33.33333333333333%
}

footer .grid-row-4 .grid-col-1 .grid-items {
    justify-content: center
}

footer .grid-row-4 .grid-col-1 .grid-item {
    height: auto
}

@media (max-width: 980px) {
    footer .grid-row-4 .grid-col-1 {
        width: 100%;
        margin-bottom: 10px
    }
}

footer .grid-row-4 .grid-col-2 {
    width: 66.66666666666666%
}

footer .grid-row-4 .grid-col-2 .grid-items {
    justify-content: center
}

footer .grid-row-4 .grid-col-2 .grid-item {
    height: auto
}

@media (max-width: 980px) {
    footer .grid-row-4 .grid-col-2 {
        width: 100%
    }
}

.module-side_products-39 .swiper-container {
    overflow: hidden
}

.module-side_products-39 .swiper-buttons {
    display: none;
    top: 50%;
    width: calc(100% - (-15px * 2));
    margin-top: -10px
}

.module-side_products-39:hover .swiper-buttons {
    display: block
}

.module-side_products-39 .swiper-button-prev {
    left: 0;
    right: auto;
    transform: translate(0, -50%)
}

.module-side_products-39 .swiper-button-next {
    left: auto;
    right: 0;
    transform: translate(0, -50%)
}

.module-side_products-39 .swiper-buttons div {
    width: 35px;
    height: 35px;
    background: rgba(44, 54, 64, 1);
    border-width: 4px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    border-radius: 50%
}

.module-side_products-39 .swiper-button-disabled {
    opacity: 0
}

.module-side_products-39 .swiper-buttons div::before {
    content: '\e408' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-side_products-39 .swiper-buttons .swiper-button-next::before {
    content: '\e409' !important;
    font-family: icomoon !important;
    color: rgba(255, 255, 255, 1)
}

.module-side_products-39 .swiper-buttons div:not(.swiper-button-disabled):hover {
    background: rgba(221, 14, 28, 1)
}

.module-side_products-39 .swiper-pagination {
    display: block;
    margin-bottom: -10px;
    left: 50%;
    right: auto;
    transform: translateX(-50%)
}

.module-side_products-39 .swiper {
    padding-bottom: 15px
}

.module-side_products-39 .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: rgba(226, 226, 226, 1)
}

.module-side_products-39 .swiper-pagination>span+span {
    margin-left: 8px
}

.desktop .module-side_products-39 .swiper-pagination-bullet:hover {
    background-color: rgba(219, 232, 240, 1)
}

.module-side_products-39 .swiper-pagination-bullet.swiper-pagination-bullet-active {
    background-color: rgba(233, 102, 49, 1)
}

.module-side_products-39 .swiper-pagination>span {
    border-radius: 50px
}

.module-side_products-39 .panel-group .panel-heading a::before {
    content: '\f067' !important;
    font-family: icomoon !important;
    margin-right: 3px;
    order: 10
}

.desktop .module-side_products-39 .panel-group .panel-heading:hover a::before {
    color: rgba(13, 82, 214, 1)
}

.module-side_products-39 .panel-group .panel-active .panel-heading a::before {
    content: '\f068' !important;
    font-family: icomoon !important;
    color: rgba(15, 58, 141, 1)
}

.module-side_products-39 .panel-group .panel-heading a {
    justify-content: space-between;
    font-family: 'Montserrat';
    font-weight: 600;
    color: rgba(105, 105, 115, 1);
    text-transform: uppercase;
    padding: 15px;
    padding-right: 5px;
    padding-left: 0px
}

.module-side_products-39 .panel-group .panel-heading:hover a {
    color: rgba(13, 82, 214, 1)
}

.module-side_products-39 .panel-group .panel-active .panel-heading:hover a,
.module-side_products-39 .panel-group .panel-active .panel-heading a {
    color: rgba(15, 58, 141, 1)
}

.module-side_products-39 .panel-group .panel-heading {
    border-width: 0;
    border-top-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1)
}

.module-side_products-39 .panel-group .panel:first-child .panel-heading {
    border-width: 0px
}

.module-side_products-39 .panel-group .panel-body {
    padding-bottom: 20px
}

.module-side_products-39 .nav-tabs>li>a,
.module-side_products-39 .nav-tabs>li.active>a,
.module-side_products-39 .nav-tabs>li.active>a:hover,
.module-side_products-39 .nav-tabs>li.active>a:focus {
    color: rgba(139, 145, 152, 1)
}

.desktop .module-side_products-39 .nav-tabs>li:hover>a,
.module-side_products-39 .nav-tabs>li.active>a {
    color: rgba(255, 255, 255, 1)
}

.module-side_products-39 .nav-tabs>li.active>a,
.module-side_products-39 .nav-tabs>li.active>a:hover,
.module-side_products-39 .nav-tabs>li.active>a:focus {
    color: rgba(230, 230, 230, 1)
}

.module-side_products-39 .nav-tabs>li.active::after {
    display: none
}

.module-side_products-39 .nav-tabs>li>a {
    justify-content: center;
    white-space: normal
}

.module-side_products-39 .nav-tabs {
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch
}

.module-side_products-39 .nav-tabs>li {
    flex-grow: 0
}

.module-side_products-39 .mobile .nav-tabs {
    overflow-x: scroll
}

.module-side_products-39 .nav-tabs::-webkit-scrollbar {
    -webkit-appearance: none;
    height: 1px;
    height: 5px;
    width: 5px
}

.module-side_products-39 .nav-tabs::-webkit-scrollbar-track {
    background-color: white
}

.module-side_products-39 .nav-tabs::-webkit-scrollbar-thumb {
    background-color: #999
}

.module-side_products-39 .tab-container::before {
    display: none
}

.module-side_products-39 .tab-container {
    display: block
}

.module-side_products-39 .tab-container .nav-tabs {
    flex-direction: row
}

.module-side_products-39 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 3 * 20px) / 4 - 0.01px)
}

.module-side_products-39 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 4 - 0.01px)
}

.one-column #content .module-side_products-39 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 2 * 20px) / 3 - 0.01px)
}

.one-column #content .module-side_products-39 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 3 - 0.01px)
}

.two-column #content .module-side_products-39 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 1 * 20px) / 2 - 0.01px)
}

.two-column #content .module-side_products-39 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 2 - 0.01px)
}

.side-column .module-side_products-39 .product-layout.swiper-slide {
    margin-right: 20px;
    width: calc((100% - 0 * 20px) / 1 - 0.01px)
}

.side-column .module-side_products-39 .product-layout:not(.swiper-slide) {
    padding: 10px;
    width: calc(100% / 1 - 0.01px)
}

.module-side_products-39 .side-products-blocks>div {
    width: calc(100% / 1)
}

.module-side_products-39:not(.carousel-mode) .module-body>.module-item>.side-products {
    margin: -10px
}

.module-side_products-39 .side-product {
    background: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-style: solid;
    border-color: rgba(226, 226, 226, 1);
    border-radius: 3px;
    padding: 7px
}

.desktop .module-side_products-39 .side-product:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1)
}

.module-side_products-39 .product-layout:not(.swiper-slide)+div {
    margin-top: 10px
}

.module-side_products-39 .side-product .image img {
    border-radius: 3px
}

.module-side_products-39 .side-product .image {
    width: 25%
}

.module-side_products-39 .side-product .caption {
    width: calc(100% - 25%);
    padding-left: 8px
}

.module-side_products-39 .side-product .quickview-button {
    display: inline-flex;
    visibility: hidden;
    opacity: 0;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) scale(.85)
}

.module-side_products-39 .side-product .quickview-button .btn {
    padding: 10px !important;
    border-radius: 50% !important
}

.module-side_products-39 .side-product:hover .quickview-button {
    visibility: visible;
    opacity: 1;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) scale(1)
}

.module-side_products-39 .side-product .btn-quickview {
    width: 30px !important;
    height: 30px !important
}

.module-side_products-39 .side-product .btn-quickview::before {
    content: '\ebef' !important;
    font-family: icomoon !important;
    font-size: 16px
}

.module-side_products-39 .side-product .name {
    display: block;
    margin-bottom: 2px
}

.module-side_products-39 .side-product .name a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-family: 'Montserrat';
    font-weight: 600;
    font-size: 13px;
    color: rgba(51, 51, 51, 1);
    line-height: 1.3
}

.module-side_products-39 .side-product .price {
    display: flex;
    align-items: center;
    flex-direction: row;
    font-size: 14px;
    margin-bottom: 2px
}

.module-side_products-39 .side-product .price-tax {
    font-size: 12px;
    display: none
}

.module-side_products-39 .side-product .price-old {
    margin: 0;
    order: 2;
    font-size: 13px;
    color: rgba(105, 105, 115, 1);
    text-decoration: line-through
}

.module-side_products-39 .side-product .price-new {
    margin: 0 5px 0 0;
    order: 1;
    color: rgba(221, 14, 28, 1)
}

.module-side_products-39 .side-product .rating {
    display: flex;
    margin-top: 2px;
    margin-bottom: 3px;
    justify-content: flex-start
}

.module-side_products-39 .side-product .rating.no-rating {
    display: none
}

.module-side_products-39 .side-product .rating .fa-stack {
    font-size: 13px;
    width: 1.2em
}

.module-side_products-39 .side-product .rating .fa-star,
.module-side_products-39 .side-product .rating .fa-star+.fa-star-o {
    color: rgba(254, 212, 48, 1)
}

.module-side_products-39 .side-product .button-group {
    display: flex;
    margin-left: -3px
}

.module-side_products-39 .side-product .btn-cart {
    display: inline-flex;
    width: 30px;
    height: 30px;
    margin-right: 8px
}

.module-side_products-39 .side-product .btn-cart::before {
    font-size: 14px;
    left: 1px
}

.module-side_products-39 .side-product .btn-cart.btn,
.module-side_products-39 .side-product .btn-cart.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-side_products-39 .side-product .btn-cart.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-side_products-39 .side-product .btn-cart.btn:active,
.module-side_products-39 .side-product .btn-cart.btn:hover:active,
.module-side_products-39 .side-product .btn-cart.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-cart.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-cart.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-side_products-39 .side-product .btn-cart.btn:hover {
    box-shadow: none
}

.module-side_products-39 .side-product .btn-cart.btn.btn.disabled::after {
    font-size: 20px
}

.module-side_products-39 .side-product .btn-wishlist {
    display: inline-flex;
    width: 30px;
    height: 30px;
    margin-right: 8px
}

.module-side_products-39 .side-product .btn-wishlist::before {
    font-size: 13px
}

.module-side_products-39 .side-product .btn-wishlist.btn,
.module-side_products-39 .side-product .btn-wishlist.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-side_products-39 .side-product .btn-wishlist.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-side_products-39 .side-product .btn-wishlist.btn:active,
.module-side_products-39 .side-product .btn-wishlist.btn:hover:active,
.module-side_products-39 .side-product .btn-wishlist.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-wishlist.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-wishlist.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-side_products-39 .side-product .btn-wishlist.btn:hover {
    box-shadow: none
}

.module-side_products-39 .side-product .btn-wishlist.btn.btn.disabled::after {
    font-size: 20px
}

.module-side_products-39 .side-product .btn-compare {
    display: inline-flex;
    width: 30px;
    height: 30px
}

.module-side_products-39 .side-product .btn-compare::before {
    font-size: 13px
}

.module-side_products-39 .side-product .btn-compare.btn,
.module-side_products-39 .side-product .btn-compare.btn:visited {
    font-size: 12px;
    color: rgba(105, 105, 115, 1);
    text-transform: none
}

.module-side_products-39 .side-product .btn-compare.btn:hover {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important
}

.module-side_products-39 .side-product .btn-compare.btn:active,
.module-side_products-39 .side-product .btn-compare.btn:hover:active,
.module-side_products-39 .side-product .btn-compare.btn:focus:active {
    color: rgba(233, 102, 49, 1) !important;
    background: none !important;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-compare.btn:focus {
    color: rgba(233, 102, 49, 1) !important;
    background: none;
    box-shadow: none
}

.module-side_products-39 .side-product .btn-compare.btn {
    background: none;
    border-style: none;
    padding: 3px;
    box-shadow: none
}

.desktop .module-side_products-39 .side-product .btn-compare.btn:hover {
    box-shadow: none
}

.module-side_products-39 .side-product .btn-compare.btn.btn.disabled::after {
    font-size: 20px
}

@media (max-width: 1024px) {
    .module-side_products-39 .swiper-buttons {
        display: none !important
    }

    .module-side_products-39 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-side_products-39 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
    }

    .module-side_products-39 .side-product .quickview-button {
        visibility: visible;
        opacity: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale(1)
    }
}

@media (max-width: 760px) {
    .module-side_products-39 .swiper-container {
        overflow: visible
    }

    .module-side_products-39 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .module-side_products-39 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-side_products-39 .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
    }

    .one-column #content .module-side_products-39 .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
    }
}

@media (max-width: 470px) {
    .module-side_products-39 .side-product .image {
        width: 100%
    }

    .module-side_products-39 .side-product .caption {
        width: 100%;
        padding-top: 8px;
        padding-left: 0px
    }

    .module-side_products-39 .side-product {
        display: flex
    }
}

.icons-menu-61 a {
    background: rgba(13, 82, 214, 1);
    width: 40px;
    height: 40px
}

.desktop .icons-menu-61 a:hover {
    background: rgba(15, 58, 141, 1)
}

.icons-menu-61 a::before {
    color: rgba(255, 255, 255, 1)
}

.icons-menu-61 .menu-item a {
    border-radius: 50px
}

.icons-menu-61 .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: ellipsis;
    display: none
}

.icons-menu-61>ul>.icons-menu-item {
    padding: calc(10px / 2)
}

.icons-menu-61 ul {
    justify-content: center
}

.icons-menu-61 .module-title {
    text-align: center
}

.icons-menu-61 .module-title::after {
    left: 50%;
    right: auto;
    transform: translate3d(-50%, 0, 0)
}

.icons-menu-61 .icons-menu-item-1.icon-menu-icon>a::before {
    content: '\f09a' !important;
    font-family: icomoon !important
}

.icons-menu-61 .icons-menu-item-2.icon-menu-icon>a::before {
    content: '\f099' !important;
    font-family: icomoon !important
}

.icons-menu-61 .icons-menu-item-3.icon-menu-icon>a::before {
    content: '\e90e' !important;
    font-family: icomoon !important;
    font-size: 18px
}

.icons-menu-61 .icons-menu-item-4.icon-menu-icon>a::before {
    content: '\f0e1' !important;
    font-family: icomoon !important
}

.icons-menu-61 .icons-menu-item-5.icon-menu-icon>a::before {
    content: '\f167' !important;
    font-family: icomoon !important
}

.icons-menu-61 .icons-menu-item-6.icon-menu-icon>a::before {
    content: '\f17e' !important;
    font-family: icomoon !important
}

.icons-menu-61 .icons-menu-item-7.icon-menu-icon>a::before {
    content: '\f0d5' !important;
    font-family: icomoon !important
}

.links-menu-72 .module-body {
    display: block;
    justify-content: flex-start;
    align-items: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-rule-style: solid
}

.links-menu-72 .menu-item {
    border-width: 1px 0 0 0;
    justify-content: flex-start;
    ;
    flex-grow: 0;
    width: auto
}

.links-menu-72 .menu-item a .links-text {
    white-space: normal
}

.links-menu-72 .menu-item a {
    justify-content: flex-start;
    ;
    padding-bottom: 12px
}

.links-menu-72 .count-badge {
    display: none
}

.phone footer .links-menu-72 .module-title::before {
    display: none
}

.phone footer .links-menu-72 .module-title+.module-body>li {
    display: flex
}

div.links-menu-72 .module-body {
    -webkit-overflow-scrolling: touch
}

@media (max-width: 760px) {
    div.links-menu-72 .title.module-title::after {
        display: none
    }
}

.links-menu-75 .module-body {
    display: block;
    justify-content: flex-start;
    align-items: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-rule-style: solid
}

.links-menu-75 .menu-item {
    border-width: 1px 0 0 0;
    justify-content: flex-start;
    ;
    flex-grow: 0;
    width: auto
}

.links-menu-75 .menu-item a .links-text {
    white-space: normal
}

.links-menu-75 .menu-item a {
    justify-content: flex-start;
    ;
    padding-bottom: 12px
}

.links-menu-75 .count-badge {
    display: none
}

.phone footer .links-menu-75 .module-title::before {
    display: none
}

.phone footer .links-menu-75 .module-title+.module-body>li {
    display: flex
}

div.links-menu-75 .module-body {
    -webkit-overflow-scrolling: touch
}

@media (max-width: 760px) {
    div.links-menu-75 .title.module-title::after {
        display: none
    }
}

.links-menu-76 .module-body {
    display: block;
    justify-content: flex-start;
    align-items: flex-start;
    ;
    -webkit-overflow-scrolling: touch;
    ;
    column-count: initial;
    column-rule-style: solid
}

.links-menu-76 .menu-item {
    border-width: 1px 0 0 0;
    justify-content: flex-start;
    ;
    flex-grow: 0;
    width: auto
}

.links-menu-76 .menu-item a .links-text {
    white-space: normal
}

.links-menu-76 .menu-item a {
    justify-content: flex-start;
    ;
    padding-bottom: 12px
}

.links-menu-76 .count-badge {
    display: none
}

.phone footer .links-menu-76 .module-title::before {
    display: none
}

.phone footer .links-menu-76 .module-title+.module-body>li {
    display: flex
}

div.links-menu-76 .module-body {
    -webkit-overflow-scrolling: touch
}

@media (max-width: 760px) {
    div.links-menu-76 .title.module-title::after {
        display: none
    }
}

.module-newsletter-67 {
    text-align: left;
    justify-content: flex-start
}

.module-newsletter-67 .module-body>div {
    align-self: flex-start
}

.module-newsletter-67 .title::after {
    left: 0;
    right: auto;
    transform: none
}

.module-newsletter-67 .module-body {
    flex-direction: column
}

.module-newsletter-67 .newsletter-text {
    color: rgba(105, 105, 115, 1);
    margin-bottom: 10px
}

.module-newsletter-67 .module-body .input-group {
    height: 40px
}

.module-newsletter-67 .module-body .newsletter-form .input-group input {
    width: 300px;
    max-width: 100%
}

.module-newsletter-67 .btn::before {
    content: '\eb79' !important;
    font-family: icomoon !important;
    margin-right: 5px
}

.module-newsletter-67 .input-group .input-group-btn .btn,
.module-newsletter-67 .input-group .input-group-btn .btn:visited {
    font-size: 12px;
    font-weight: 400;
    text-transform: none
}

.module-newsletter-67 .input-group .input-group-btn .btn {
    padding: 2px;
    padding-right: 6px;
    padding-left: 6px;
    min-width: 20px;
    min-height: 20px;
    min-height: 30px;
    height: 30px
}

.desktop .module-newsletter-67 .input-group .input-group-btn .btn:hover {
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
}

.module-newsletter-67 .input-group .input-group-btn .btn:active,
.module-newsletter-67 .input-group .input-group-btn .btn:hover:active,
.module-newsletter-67 .input-group .input-group-btn .btn:focus:active {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-newsletter-67 .input-group .input-group-btn .btn:focus {
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
}

.module-newsletter-67 .input-group .input-group-btn .btn.btn.disabled::after {
    font-size: 20px
}

.module-newsletter-67 .input-group-btn .btn {
    transform: translateX(-5px);
    margin-top: 5px
}

.module-newsletter-67 .checkbox label {
    font-size: 11px;
    color: rgba(139, 145, 152, 1)
}

.module-newsletter-67 .module-body .newsletter-form .checkbox {
    padding-top: 10px
}

@media (max-width: 760px) {
    .module-newsletter-67 .title.module-title::after {
        display: none
    }
}

div.links-menu-77 .menu-item a .links-text {
    color: rgba(139, 145, 152, 1)
}

div.links-menu-77 .module-body {
    -webkit-overflow-scrolling: touch
}

.icons-menu-228 a::before {
    color: rgba(139, 145, 152, 1);
    font-size: 30px
}

.desktop .icons-menu-228 a:hover::before {
    color: rgba(255, 255, 255, 1)
}

.icons-menu-228>ul {
    margin: -8px
}

.icons-menu-228 .links-text {
    white-space: normal;
    overflow: visible;
    text-overflow: ellipsis;
    display: none
}

.icons-menu-228>ul>.icons-menu-item {
    padding: calc(15px / 2)
}

.icons-menu-228 ul {
    justify-content: flex-end
}

.icons-menu-228 .module-title {
    text-align: right
}

.icons-menu-228 .module-title::after {
    left: 100%;
    right: auto;
    transform: translate3d(-100%, 0, 0)
}

@media (max-width: 980px) {
    .icons-menu-228 ul {
        justify-content: center
    }

    .icons-menu-228 .module-title {
        text-align: center
    }

    .icons-menu-228 .module-title::after {
        left: 50%;
        right: auto;
        transform: translate3d(-50%, 0, 0)
    }
}

.icons-menu-228 .icons-menu-item-1.icon-menu-icon>a::before {
    content: '\f1f0' !important;
    font-family: icomoon !important
}

.icons-menu-228 .icons-menu-item-2.icon-menu-icon>a::before {
    content: '\f1f1' !important;
    font-family: icomoon !important
}

.icons-menu-228 .icons-menu-item-3.icon-menu-icon>a::before {
    content: '\f1f3' !important;
    font-family: icomoon !important
}

.icons-menu-228 .icons-menu-item-4.icon-menu-icon>a::before {
    content: '\f1f2' !important;
    font-family: icomoon !important
}

.icons-menu-228 .icons-menu-item-5.icon-menu-icon>a::before {
    content: '\f1f4' !important;
    font-family: icomoon !important
}

.icons-menu-228 .icons-menu-item-6.icon-menu-icon>a::before {
    content: '\f1f5' !important;
    font-family: icomoon !important
}

    
</style>
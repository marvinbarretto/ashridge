

<?php get_header() ?>

<section id="main">

<div
    class="section no-padding banner-building-surveys" 
    <?php if(has_post_thumbnail()): ?>
      style="background-image: url('<?php the_post_thumbnail_url('banner'); ?>')"
      <?php endif; ?>
  >
    <div class="container">
      <div class="row no-marg-bot">
        <div class="col s6 push-s1 hide-on-small-and-down no-padding vbar theme-bg4">
          <!--h1 class="alt1 center theme-text">Surveying.<span style="font-size:0"> </span><span class="theme-text2">Simplified.</span></h1-->
          <h1 class="alt1 center theme-text">
            <?php the_title() ?>
          </h1>
          <svg id="banner-logo" data-name="banner-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544.49 148.67">
            <title>logo</title>
            <path class="cls-1" d="M216,87V85.5s.73-.06,1.51-.2a12.27,12.27,0,0,0,2.44-.7,7,7,0,0,0,2.23-1.41,3.05,3.05,0,0,0,1-2.32,13.23,13.23,0,0,0-.55-3q-.56-2.07-1.56-5c-.67-2-1.45-4-2.32-6.45a76.14,76.14,0,0,0-2.82-7.4H189.07c-1,2-2,4.83-2.92,7.15s-1.88,4.57-2.82,6.93c-1.41,3.63-2.12,6.15-2.12,7.62a3,3,0,0,0,.81,2.15,6.16,6.16,0,0,0,2.07,1.4,13.35,13.35,0,0,0,2.93.8c1,.17,2,.32,3,.45V87H168V85.4A10.24,10.24,0,0,0,172.54,84a10.41,10.41,0,0,0,2.19-1.51,21.76,21.76,0,0,0,2.33-3.33A73.53,73.53,0,0,0,181,71.39q2.12-4.74,4.74-10.79l5.4-12.45q2.77-6.4,5.5-12.91t5.14-12.15l-1-2.22A16.36,16.36,0,0,0,204,19a19.5,19.5,0,0,0,2.57-2.32,20,20,0,0,0,1.86-2.07c.5-.74.89-1.57,1.16-1.57h.81c2.08,5,4.07,10.62,5.95,15.63s3.68,9.71,5.39,14.34,3.38,9.06,5,13.4S230,65,231.62,69.2c.74,2.08,1.43,3.8,2.07,5.18l2.17,4.68a13.08,13.08,0,0,0,.91,1.41,12.68,12.68,0,0,0,1.87,2.07,13.08,13.08,0,0,0,3.11,1.86,9.86,9.86,0,0,0,4.27.91V87ZM202.88,25.41q-.6,1.31-1.76,4.13t-2.87,6.86c-1.14,2.69-2.4,6-3.78,9.34S191.59,53,190,57h25.11c-1.14-3-2.3-6.27-3.48-9.29s-2.32-6-3.43-8.83-2.12-5.4-3-7.72S203.49,26.89,202.88,25.41Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M280,78.59a13.41,13.41,0,0,1-4.18,4.69,17.64,17.64,0,0,1-6,2.62,30.46,30.46,0,0,1-7.11.81,41.65,41.65,0,0,1-8.38-.81A30.55,30.55,0,0,1,247,83.59V70h.84a31.85,31.85,0,0,0,2,5.23,26.37,26.37,0,0,0,2.91,5A14.69,14.69,0,0,0,256.87,84a10.84,10.84,0,0,0,5.73,1.48,10.56,10.56,0,0,0,7.68-2.76q2.86-2.77,2.86-8.52a7.26,7.26,0,0,0-2-5.19,10,10,0,0,0-5.37-2.77q-2.71-.5-5.22-1.11a46.38,46.38,0,0,1-4.52-1.31,12.49,12.49,0,0,1-6.18-4.54,12.79,12.79,0,0,1-2.36-7.76,12.05,12.05,0,0,1,1.31-5.65,13.72,13.72,0,0,1,3.53-4.34,15.83,15.83,0,0,1,5.14-2.77,20,20,0,0,1,6.25-1,32.93,32.93,0,0,1,7.46.76,48.8,48.8,0,0,1,6.15,1.87l1.21,12.5-.81.2q-1.41-3-2.82-5.6a22.73,22.73,0,0,0-3.13-4.44A12.31,12.31,0,0,0,268,40.23a11.72,11.72,0,0,0-5-1,9.84,9.84,0,0,0-3.38.6,8.62,8.62,0,0,0-2.92,1.77,9,9,0,0,0-2.07,2.92,9.72,9.72,0,0,0-.81,4.08q0,3.73,2.12,5.34a14.54,14.54,0,0,0,5.34,2.42q2.22.5,4.84,1.06t4.54,1.06a15,15,0,0,1,7.71,4.64,12.49,12.49,0,0,1,3.18,8.67A14.05,14.05,0,0,1,280,78.59Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M312,87V85.4a22.54,22.54,0,0,0,4.36-.66A1.89,1.89,0,0,0,318,82.68V57.47a35.19,35.19,0,0,0-.29-5.44,12.4,12.4,0,0,0-1.4-4.34,7.41,7.41,0,0,0-2.84-2.82,9.45,9.45,0,0,0-4.62-1,13.21,13.21,0,0,0-6.14,1.31,10.83,10.83,0,0,0-4,3.53,11.55,11.55,0,0,0-.43,1.26,4.79,4.79,0,0,0-.23,1.76v31a1.86,1.86,0,0,0,.38,1.41,2.89,2.89,0,0,0,1.25.76,6.79,6.79,0,0,0,1.58.35,5.74,5.74,0,0,1,1.78.3V87H283V85.5a16,16,0,0,0,4.16-.76A2.34,2.34,0,0,0,289,82.27V25a5.24,5.24,0,0,0,0-1.21,1.94,1.94,0,0,0-.76-.91,7.5,7.5,0,0,0-1.89-1.36c-.91-.44-2.4-.92-2.4-1.46v-.6L297.06,13h.81l-.3,35.14.2.18a18.55,18.55,0,0,1,2.16-3.19,19,19,0,0,1,3.67-3.41A23.51,23.51,0,0,1,308.66,39a16.58,16.58,0,0,1,6.28-1.16A12.12,12.12,0,0,1,320.52,39a9.32,9.32,0,0,1,3.62,3.23,13.77,13.77,0,0,1,2.11,4.89,31.47,31.47,0,0,1,.75,6.15V83a1.36,1.36,0,0,0,.4,1.21,3.55,3.55,0,0,0,1.41.76,19,19,0,0,0,2.09.4,20.24,20.24,0,0,0,2.09.25V87Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M369.35,46.83a4,4,0,0,1-3,1.46,5.13,5.13,0,0,1-2.57-.55,7.87,7.87,0,0,1-1.66-1.26,11.05,11.05,0,0,0-1.51-1.26,3.89,3.89,0,0,0-2.22-.55,4,4,0,0,0-2.37.86,11,11,0,0,0-2.17,2.17,16.36,16.36,0,0,0-1.61,3A8.29,8.29,0,0,0,351,53.84v29a1.66,1.66,0,0,0,1.11,1.41,7.07,7.07,0,0,0,2.17.71,19.36,19.36,0,0,0,2.49.25,19,19,0,0,1,2.24.25V87H337V85.5a15.72,15.72,0,0,0,3.66-.91A2.13,2.13,0,0,0,342,82.27V48.19A4.37,4.37,0,0,0,342,47a2.09,2.09,0,0,0-.8-.91c-.61-.34-1.12-.76-1.93-1.26S337,43.89,337,43.56v-.61L349.89,38h.61l-.2,14h.2a35.16,35.16,0,0,1,1.61-3.62,30.61,30.61,0,0,1,2.82-4.73,17.82,17.82,0,0,1,4.13-4.11,9.37,9.37,0,0,1,5.54-1.72,6.36,6.36,0,0,1,4.29,1.51,4.83,4.83,0,0,1,1.76,3.83A5.31,5.31,0,0,1,369.35,46.83Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M371,87V85.5c1-.06,1.85-.15,2.65-.25a10.78,10.78,0,0,0,2.28-.51,4.29,4.29,0,0,0,1.51-1,1.89,1.89,0,0,0,.55-1.51V47.69a6.58,6.58,0,0,0,0-1.41,1.85,1.85,0,0,0-.78-1.11A22.3,22.3,0,0,0,374.87,44,27.39,27.39,0,0,0,372,42.85v-.61L386.09,38H387V82.88a1.68,1.68,0,0,0,.7,1.46,4,4,0,0,0,1.48.65,10.27,10.27,0,0,0,1.86.25c.71,0,1,.12,2,.25V87Zm14.93-61.24a5.49,5.49,0,0,1-9.33-3.88A5.1,5.1,0,0,1,378.17,18a5.73,5.73,0,0,1,7.76,0,5.1,5.1,0,0,1,1.56,3.83A5.27,5.27,0,0,1,385.93,25.76Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M434.08,87H433V77h.37a23.34,23.34,0,0,1-6.91,7.33,18.84,18.84,0,0,1-9.93,2.35,18.46,18.46,0,0,1-7.21-1.5,17.13,17.13,0,0,1-6.2-4.55,23,23,0,0,1-4.34-7.57,30.47,30.47,0,0,1-1.61-10.34A25.48,25.48,0,0,1,399,52.93,23.69,23.69,0,0,1,412.4,39.73a27.73,27.73,0,0,1,10.49-1.92,30.73,30.73,0,0,1,5.7.5,42.5,42.5,0,0,1,4.89,1.21c-.07-1-.25-2.38-.29-4.13S433,31.86,433,30V21.48l-8-3.13v-.6L441,13h1V78.75c0,.34,1.47.8,2.95,1.41S448,81.33,449,81.87v.71ZM433,48.9a15.08,15.08,0,0,0-5.46-6.65c-2.29-1.68-4.31-2.52-6.26-2.52a11.82,11.82,0,0,0-6.66,1.81,14.64,14.64,0,0,0-4.56,4.84,22.81,22.81,0,0,0-2.66,7,37.71,37.71,0,0,0-.85,8.07,31.7,31.7,0,0,0,1,8,21.88,21.88,0,0,0,3,6.86,16.13,16.13,0,0,0,5,4.79,13,13,0,0,0,6.91,1.82,9.54,9.54,0,0,0,6.92-2.82c2-1.88,3.6-4.27,3.6-7.16Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M503.2,46a3.36,3.36,0,0,1-2.57,1.16,5.29,5.29,0,0,1-1.81-.51q-1.21-.5-2.67-1.21t-3-1.56l-2.72-1.56-.4.4q1.51,2.32,2.57,4.34a11.27,11.27,0,0,1,1.06,5.24q0,8-5.55,11.95t-15.33,4a20.93,20.93,0,0,1-2.87-.2,25.83,25.83,0,0,0-3.48-.2,10.14,10.14,0,0,0-5.14,1.51,3.91,3.91,0,0,0-1.92,3.33,3.71,3.71,0,0,0,1,2.67A7,7,0,0,0,462.92,77a12.56,12.56,0,0,0,3.33.79,31.75,31.75,0,0,0,3.53.18H485.9a17.23,17.23,0,0,1,6.35,1.13,14.84,14.84,0,0,1,4.84,3,13.19,13.19,0,0,1,3.08,4.39,13.83,13.83,0,0,1,1.06,5.5,15.38,15.38,0,0,1-2,7.51,20.31,20.31,0,0,1-5.49,6.3,27.43,27.43,0,0,1-8.32,4.29,33.78,33.78,0,0,1-10.54,1.56q-11,0-17.09-3.28t-6.1-9a6.67,6.67,0,0,1,1.16-3.83,17.37,17.37,0,0,1,2.92-3.28,29.36,29.36,0,0,1,3.92-2.92A40.94,40.94,0,0,0,464,86.71v-.2c-3-.4-6.05-1.38-7.9-2.92a8,8,0,0,1-1.86-9.78,11,11,0,0,1,2.52-3.12,14.1,14.1,0,0,1,3.67-2.37A24.55,24.55,0,0,1,465,67v-.3a14.54,14.54,0,0,1-6.79-5,13.79,13.79,0,0,1-2.41-8.47,13,13,0,0,1,1.49-6,15,15,0,0,1,4.1-4.89A20.6,20.6,0,0,1,467.6,39a24.28,24.28,0,0,1,7.82-1.21,29.74,29.74,0,0,1,6.81.71,26.32,26.32,0,0,1,6.2,2.42,10.57,10.57,0,0,0,2.07.5,17.8,17.8,0,0,0,2.07.1,6.22,6.22,0,0,0,2.17-.35,12.13,12.13,0,0,0,1.77-.81,13.36,13.36,0,0,1,1.71-.81,5.84,5.84,0,0,1,2.12-.35,3.66,3.66,0,0,1,2.82,1.21,4.18,4.18,0,0,1,1.11,2.92A3.84,3.84,0,0,1,503.2,46Zm-9.93,45.12a6.8,6.8,0,0,0-2.92-2.93,17.81,17.81,0,0,0-5.54-1.56,71.74,71.74,0,0,0-9.17-.45q-2.12,0-4.34.2t-3.63.4q-4.74,1.21-6.55,3.83a9.89,9.89,0,0,0-1.82,5.75A9.33,9.33,0,0,0,461,102a15.9,15.9,0,0,0,4.39,4.08,20.26,20.26,0,0,0,5.59,2.47,21.13,21.13,0,0,0,5.5.81,38,38,0,0,0,5.19-.3,19.88,19.88,0,0,0,3.88-.91,15.88,15.88,0,0,0,6.2-4.54,11.12,11.12,0,0,0,2.67-7.46A10,10,0,0,0,493.26,91.15Zm-8.37-43.76a12.65,12.65,0,0,0-2.07-4.08,10.07,10.07,0,0,0-3.43-2.82,10.35,10.35,0,0,0-4.79-1.06,9,9,0,0,0-4.54,1.16,10.36,10.36,0,0,0-3.38,3.13,14.86,14.86,0,0,0-2.07,4.49,19,19,0,0,0-.7,5.14q0,6,3.08,9.73a9.44,9.44,0,0,0,7.51,3.68,9.29,9.29,0,0,0,4.79-1.21,11,11,0,0,0,3.48-3.23,14.73,14.73,0,0,0,2.12-4.59,20.32,20.32,0,0,0,.71-5.39A16.91,16.91,0,0,0,484.89,47.39Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-1" d="M545.09,76.17a19,19,0,0,1-3.83,5.09,20.27,20.27,0,0,1-5.8,3.83,18.19,18.19,0,0,1-7.51,1.51,22.49,22.49,0,0,1-9.38-1.91,20.46,20.46,0,0,1-7.21-5.39,24.85,24.85,0,0,1-4.59-8.17,30.28,30.28,0,0,1-1.61-9.93A25.39,25.39,0,0,1,511,45.27a21.68,21.68,0,0,1,6.76-5.39,18.87,18.87,0,0,1,8.82-2.07,26.58,26.58,0,0,1,7.41,1,17.19,17.19,0,0,1,6,3.07,15.14,15.14,0,0,1,4.18,5A22.31,22.31,0,0,1,546.1,54H513.73a18,18,0,0,1-.1,2.09c-.07.71-.1,1.54-.1,2.28a27.5,27.5,0,0,0,1.21,8.17,21.55,21.55,0,0,0,3.53,6.89,16.39,16.39,0,0,0,5.85,4.7,18.45,18.45,0,0,0,8.17,1.72,15.3,15.3,0,0,0,8.82-2.57,12.12,12.12,0,0,0,5-6.3l.81.2A18.54,18.54,0,0,1,545.09,76.17Zm-11.54-34a9.14,9.14,0,0,0-6.91-2.67,8.4,8.4,0,0,0-5.09,1.66,18.72,18.72,0,0,0-3.93,3.88A19.59,19.59,0,0,0,515,49.54,14.91,14.91,0,0,0,513.93,53h4.13c1.21,0,2.4,0,3.58,0l3.68-.09q1.91,0,4.23,0c1,0,1.95,0,2.82-.1a7.82,7.82,0,0,0,2.32-.5,7.39,7.39,0,0,0,1.06-1.51,4.89,4.89,0,0,0,.35-2.12A8.91,8.91,0,0,0,533.54,42.2Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M177.54,141.38a14.35,14.35,0,0,1-5.61-1.07,12.09,12.09,0,0,1-4.24-2.92l-.4-.43,1.61-1.4.37.39a10.44,10.44,0,0,0,3.75,2.56,12,12,0,0,0,4.46.86,10.22,10.22,0,0,0,3.13-.48,8.36,8.36,0,0,0,2.6-1.35,6.21,6.21,0,0,0,1.74-2.13,6.46,6.46,0,0,0,.63-2.92,5.12,5.12,0,0,0-.68-2.73,6.91,6.91,0,0,0-1.82-1.94,11.41,11.41,0,0,0-2.62-1.4c-1-.38-2-.74-3.07-1.06-1.31-.41-2.54-.85-3.65-1.31a11.58,11.58,0,0,1-3-1.76,7.38,7.38,0,0,1-2-2.56,8.45,8.45,0,0,1-.7-3.6,8,8,0,0,1,.85-3.7,8.11,8.11,0,0,1,2.28-2.73,10.46,10.46,0,0,1,3.28-1.67,13.14,13.14,0,0,1,3.9-.57,12.47,12.47,0,0,1,4.8.94,9.62,9.62,0,0,1,3.77,2.72l.36.43-1.62,1.4-.37-.45a7.92,7.92,0,0,0-3-2.23,9.86,9.86,0,0,0-4-.81,11,11,0,0,0-3,.42,8.43,8.43,0,0,0-2.62,1.25,6.36,6.36,0,0,0-1.85,2.07,5.92,5.92,0,0,0-.69,2.92,5.84,5.84,0,0,0,.6,2.78,6.15,6.15,0,0,0,1.64,1.95,9.88,9.88,0,0,0,2.39,1.37c.94.38,1.89.73,2.85,1,1.33.43,2.6.89,3.79,1.35a14,14,0,0,1,3.19,1.71,7.55,7.55,0,0,1,2.22,2.54,7.64,7.64,0,0,1,.8,3.62,8.34,8.34,0,0,1-.84,3.78,8.67,8.67,0,0,1-2.22,2.81,9.41,9.41,0,0,1-3.26,1.73A12.94,12.94,0,0,1,177.54,141.38Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M187.15,132.48a7.75,7.75,0,0,1-.78,3.53,8.07,8.07,0,0,1-2.08,2.63,8.81,8.81,0,0,1-3.06,1.62,12.32,12.32,0,0,1-3.69.55,13.72,13.72,0,0,1-5.39-1,11.47,11.47,0,0,1-4-2.78l.76-.66a11,11,0,0,0,4,2.7,12.51,12.51,0,0,0,4.67.9,10.73,10.73,0,0,0,3.31-.51,8.87,8.87,0,0,0,2.77-1.45,6.75,6.75,0,0,0,1.9-2.32,7,7,0,0,0,.69-3.18,5.65,5.65,0,0,0-.76-3,7.44,7.44,0,0,0-2-2.1,11.94,11.94,0,0,0-2.75-1.47q-1.54-.59-3.11-1.07-2-.61-3.6-1.29a11,11,0,0,1-2.82-1.67,6.79,6.79,0,0,1-1.83-2.37,7.85,7.85,0,0,1-.65-3.36,7.37,7.37,0,0,1,.78-3.44,7.51,7.51,0,0,1,2.12-2.54,9.84,9.84,0,0,1,3.11-1.58,12.53,12.53,0,0,1,3.73-.55,11.84,11.84,0,0,1,4.58.9,9,9,0,0,1,3.55,2.56l-.76.66a8.45,8.45,0,0,0-3.2-2.39,10.38,10.38,0,0,0-4.23-.85,11.53,11.53,0,0,0-3.15.44,9,9,0,0,0-2.79,1.34,6.89,6.89,0,0,0-2,2.26,6.45,6.45,0,0,0-.76,3.2,6.36,6.36,0,0,0,.67,3,6.68,6.68,0,0,0,1.79,2.13,10.41,10.41,0,0,0,2.53,1.45q1.41.57,2.88,1.05,2,.66,3.76,1.34a13.41,13.41,0,0,1,3.06,1.64,7,7,0,0,1,2.06,2.35A7,7,0,0,1,187.15,132.48Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M202,141.11a8.29,8.29,0,0,1-3.84-.81,6.77,6.77,0,0,1-2.48-2.15,8.58,8.58,0,0,1-1.3-3A14.23,14.23,0,0,1,194,132V119h2v12.87a13.64,13.64,0,0,0,.32,2.54,6.59,6.59,0,0,0,1,2.32,5.72,5.72,0,0,0,1.81,1.73,5.47,5.47,0,0,0,2.91.68,7.14,7.14,0,0,0,3-.63,6.93,6.93,0,0,0,2.4-1.8,9.54,9.54,0,0,0,1.84-2.91,11.7,11.7,0,0,0,.81-4V119h2v15.85c0,.32-.13.71-.12,1.17l0,1.43c0,.47,0,.93,0,1.36s0,1,.07,1.33l0,.87h-2.12l-.05-.76c0-.3-.05-.81-.07-1.26s-.06-2.07-.06-2.07c-.14.22-.28.4-.44.61a8.65,8.65,0,0,1-2,2,9.14,9.14,0,0,1-5.24,1.62Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M208.81,137.34a7.7,7.7,0,0,1-1.9,1.77,8.43,8.43,0,0,1-2.32,1.09,8.54,8.54,0,0,1-2.59.37,7.7,7.7,0,0,1-3.58-.76,6.19,6.19,0,0,1-2.28-2,7.66,7.66,0,0,1-1-2.76A13.52,13.52,0,0,1,195,132V120h1v11.87a13.21,13.21,0,0,0,0,2.65,6.89,6.89,0,0,0,.9,2.52,6,6,0,0,0,1.91,1.91,5.86,5.86,0,0,0,3.17.77,7.58,7.58,0,0,0,3.18-.68,7.43,7.43,0,0,0,2.59-1.95,9.52,9.52,0,0,0,1.65-3.09,12.39,12.39,0,0,0,.56-4.14V120h1v14.85c0,.32.09.72.1,1.18s.07.94.08,1.43.06,1,.09,1.41a9.14,9.14,0,0,0,.11,1.13h-1a9.21,9.21,0,0,1-.07-1.13c0-.44,0-.93,0-1.44s0-.83,0-1.31,0-1.12,0-1.12h-.09A7.55,7.55,0,0,1,208.81,137.34Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M220,141V124.86c0-.32,0-.7,0-1.17l0-1.42c0-.48,0-.93-.06-1.36s-.05-.89-.08-1.18l-.06-.73h2.12l.05.61c0,.3.05.73.07,1.18l.05,1.69a6.33,6.33,0,0,1,2.12-2.22,7.63,7.63,0,0,1,4.57-1.27H230l.31,2H229a5.73,5.73,0,0,0-3.06.55,6.29,6.29,0,0,0-2.1,2,9.5,9.5,0,0,0-1.34,2.84,12.89,12.89,0,0,0-.5,3.16V141Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M224.53,120.42a7.3,7.3,0,0,1,4.25-1.42h.4c.12,0-.18.17.82.2V120a3.59,3.59,0,0,1-.76,0H229a6.26,6.26,0,0,0-3.35.85,7.15,7.15,0,0,0-2.28,2.23,9.81,9.81,0,0,0-1.13,3.07,13.38,13.38,0,0,0-.24,3.35V140h-1V124.86c0-.32-.19-.71-.2-1.18s-.12-.94-.14-1.42-.08-.83-.11-1.27a5,5,0,0,0-.13-1h1a6.69,6.69,0,0,1,.07,1c0,.44,0,.86,0,1.37s0,.94,0,1.42,0,1.23,0,1.23h.09A8.41,8.41,0,0,1,224.53,120.42Z" transform="translate(-2.99 -2.94)"></path>
            <polygon class="cls-2" points="235.91 138.06 227.36 116.06 229.65 116.06 236.95 134.39 243.99 116.06 246.28 116.06 237.97 138.06 235.91 138.06"></polygon>
            <path class="cls-2" d="M240.58,140h-1.3l-8.09-20h1.07l7.65,19H240l7.38-19h1.07Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M262.53,141.11a11,11,0,0,1-4.38-.86,10.27,10.27,0,0,1-3.43-2.39,10.57,10.57,0,0,1-2.22-3.66,13.26,13.26,0,0,1-.77-4.58,12,12,0,0,1,.8-4.42,11,11,0,0,1,2.2-3.51,9.85,9.85,0,0,1,3.31-2.3,10.28,10.28,0,0,1,4.08-.81,10.5,10.5,0,0,1,4.45.89,8.76,8.76,0,0,1,4.94,5.61,11.52,11.52,0,0,1,.5,3.71V130H253.86a12.35,12.35,0,0,0,.52,3,9.41,9.41,0,0,0,1.6,3.08,8.1,8.1,0,0,0,2.7,2.18,8.54,8.54,0,0,0,3.86.83,8.49,8.49,0,0,0,7.11-3.45l.37-.47,1.58,1.36-.34.43a10.47,10.47,0,0,1-8.72,4.16ZM270.08,128a8.78,8.78,0,0,0-.62-2.7,7.76,7.76,0,0,0-1.65-2.54,7.1,7.1,0,0,0-2.49-1.63,8.67,8.67,0,0,0-3.27-.58,7.39,7.39,0,0,0-3.7.87,8.3,8.3,0,0,0-2.53,2.18,8.66,8.66,0,0,0-1.46,2.61c-.23.7-.37,1.79-.43,1.79Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M253.28,130a12.19,12.19,0,0,0,.56,3.46,9.26,9.26,0,0,0,1.7,3.13,8.44,8.44,0,0,0,2.88,2.26,9.06,9.06,0,0,0,4.11.85,9.1,9.1,0,0,0,7.56-3.7l.72.61a10.77,10.77,0,0,1-12.43,3.13,9.67,9.67,0,0,1-3.24-2.26A10,10,0,0,1,253,134a12.64,12.64,0,0,1-.74-4.38,11.35,11.35,0,0,1,.76-4.21,10.36,10.36,0,0,1,2.08-3.33,9.25,9.25,0,0,1,3.12-2.17,9.68,9.68,0,0,1,3.85-.77,9.9,9.9,0,0,1,4.21.83,8.84,8.84,0,0,1,3,2.19,9.46,9.46,0,0,1,1.94,3.09,11.23,11.23,0,0,1,.76,3.53V130Zm17.39-1a8.21,8.21,0,0,0-.69-3.69,8.78,8.78,0,0,0-1.77-2.83,7.76,7.76,0,0,0-2.68-1.82A9.19,9.19,0,0,0,262,120a7.91,7.91,0,0,0-4,.94,8.81,8.81,0,0,0-2.7,2.32,10.21,10.21,0,0,0-1.54,3,8.15,8.15,0,0,0-.49,2.75Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M277.29,151.11a6.47,6.47,0,0,1-1-.1,5.67,5.67,0,0,1-1-.25l-.51-.19.61-1.9.54.18a5.52,5.52,0,0,0,.67.16,4.35,4.35,0,0,0,.81.08,3,3,0,0,0,1.38-.29,3.46,3.46,0,0,0,1-.77,4.7,4.7,0,0,0,.74-1.11q.32-.68.59-1.36l1.89-5.15L274.62,119h2.29l7.16,18.6L291,119h2.29l-10.49,27.7a7.9,7.9,0,0,1-2.06,3.19A5.11,5.11,0,0,1,277.29,151.11Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M282.25,146.71a6.89,6.89,0,0,1-1.9,2.86,4.49,4.49,0,0,1-3.06,1,6.1,6.1,0,0,1-.94-.1,5,5,0,0,1-.89-.23l.27-.84a6.14,6.14,0,0,0,.74.17,5,5,0,0,0,.92.09,3.59,3.59,0,0,0,1.63-.35,4,4,0,0,0,1.19-.9,5.26,5.26,0,0,0,.83-1.25c.22-.47.42-.94.6-1.4l2-5.14L275.45,120h1.07l7.56,19.64L291.37,120h1.07Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M307,141.11a12.18,12.18,0,0,1-4.55-.83,10.67,10.67,0,0,1-3.59-2.34,10.45,10.45,0,0,1-2.34-3.59,12.28,12.28,0,0,1-.82-4.55,12.11,12.11,0,0,1,.82-4.53,10.3,10.3,0,0,1,2.34-3.55,10.85,10.85,0,0,1,3.58-2.31,12.18,12.18,0,0,1,4.55-.83,12.36,12.36,0,0,1,4.57.83,10.83,10.83,0,0,1,3.61,2.31,10.31,10.31,0,0,1,2.34,3.55,12.12,12.12,0,0,1,.82,4.53,12.28,12.28,0,0,1-.82,4.55,10.46,10.46,0,0,1-2.34,3.59,10.66,10.66,0,0,1-3.61,2.34A12.36,12.36,0,0,1,307,141.11Zm0-20.56a9.71,9.71,0,0,0-3.85.72,8.44,8.44,0,0,0-4.7,4.92,10.28,10.28,0,0,0-.63,3.61,10.43,10.43,0,0,0,.63,3.66,8.57,8.57,0,0,0,1.82,2.94,8.92,8.92,0,0,0,2.88,2,9.49,9.49,0,0,0,3.84.74,9.64,9.64,0,0,0,3.87-.74,8.87,8.87,0,0,0,2.9-2,8.56,8.56,0,0,0,1.82-2.94,10.44,10.44,0,0,0,.63-3.66,10.29,10.29,0,0,0-.63-3.61,8.4,8.4,0,0,0-4.72-4.91A9.88,9.88,0,0,0,307,120.56Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M317.8,129.81a11.67,11.67,0,0,1-.78,4.34,9.87,9.87,0,0,1-2.21,3.4,10,10,0,0,1-3.42,2.21,11.74,11.74,0,0,1-4.36.79,11.56,11.56,0,0,1-4.34-.79,10.05,10.05,0,0,1-3.4-2.21,9.85,9.85,0,0,1-2.21-3.4,11.66,11.66,0,0,1-.78-4.34,11.5,11.5,0,0,1,.78-4.32,9.69,9.69,0,0,1,2.21-3.35,10.24,10.24,0,0,1,3.4-2.19,11.56,11.56,0,0,1,4.34-.79,11.74,11.74,0,0,1,4.36.79,10.22,10.22,0,0,1,3.42,2.19,9.71,9.71,0,0,1,2.21,3.35A11.51,11.51,0,0,1,317.8,129.81Zm-1,0a10.82,10.82,0,0,0-.67-3.81,9,9,0,0,0-5-5.24A10.39,10.39,0,0,0,307,120a10.23,10.23,0,0,0-4.07.77,9,9,0,0,0-5,5.24,10.81,10.81,0,0,0-.67,3.81,11,11,0,0,0,.67,3.86,9.09,9.09,0,0,0,1.94,3.13,9.44,9.44,0,0,0,3.06,2.13,10,10,0,0,0,4.07.79,10.16,10.16,0,0,0,4.09-.79,9.38,9.38,0,0,0,3.08-2.12,9.09,9.09,0,0,0,1.95-3.13A11,11,0,0,0,316.81,129.81Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M325,141V124.86c0-.32-.16-.7-.17-1.17l-.12-1.42c0-.48-.08-.93-.1-1.36s-.08-.89-.11-1.18l-.08-.72h2.12l.05.61c0,.3.05.73.07,1.18l.05,1.7a6.33,6.33,0,0,1,2.12-2.23A7.63,7.63,0,0,1,333.4,119h.4c.15,0,.44-.19.63-.15l.57-.12v2l-.81.05c-.07,0-.26.19-.32.19h-.25a5.73,5.73,0,0,0-3.06.55,6.28,6.28,0,0,0-2.1,2,9.14,9.14,0,0,0-1.15,2.84,12.61,12.61,0,0,0-.31,3.16V141Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M329.15,120.42A7.3,7.3,0,0,1,333.4,119h.4c.12,0,.2.17.2.2V120s0,0-.13,0h-.25a6.26,6.26,0,0,0-3.35.85,7.14,7.14,0,0,0-2.28,2.23,10.39,10.39,0,0,0-1.44,3.07,13.92,13.92,0,0,0-.55,3.35V140h-1V124.86c0-.32.12-.71.11-1.18s0-.94,0-1.42,0-.83,0-1.27,0-1-.06-1h1a6.44,6.44,0,0,1,.07,1c0,.44,0,.86,0,1.37s0,.94,0,1.42,0,1.23,0,1.23h.09A8.43,8.43,0,0,1,329.15,120.42Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M344.17,141a10.37,10.37,0,0,1-4.37-.91,8.32,8.32,0,0,1-3.28-2.7l-.35-.48,1.75-1.15.32.44a6.88,6.88,0,0,0,6,2.84,6.25,6.25,0,0,0,1.82-.28,5.48,5.48,0,0,0,1.66-.83,4.26,4.26,0,0,0,1.18-1.36,3.71,3.71,0,0,0,.44-1.83,3.22,3.22,0,0,0-.54-1.94,4.28,4.28,0,0,0-1.44-1.24,10,10,0,0,0-2.05-.81l-2.2-.59c-.75-.2-1.47-.44-2.16-.7a6.78,6.78,0,0,1-1.88-1.05,4.79,4.79,0,0,1-1.32-1.66,5.6,5.6,0,0,1-.48-2.44,5.2,5.2,0,0,1,.61-2.56,5.4,5.4,0,0,1,1.6-1.79,7.25,7.25,0,0,1,2.21-1,8.83,8.83,0,0,1,2.46-.35,7.81,7.81,0,0,1,6.77,3.17l.37.51-1.82,1-.3-.39a6.2,6.2,0,0,0-2.13-1.79,6.54,6.54,0,0,0-2.88-.58,7.34,7.34,0,0,0-1.66.2,4.9,4.9,0,0,0-1.54.65,3.64,3.64,0,0,0-1.12,1.16,3.24,3.24,0,0,0-.43,1.72,3.92,3.92,0,0,0,.36,1.83,2.78,2.78,0,0,0,1,1.06,7,7,0,0,0,1.7.75c.71.22,1.5.43,2.33.63s1.64.46,2.41.74a9.2,9.2,0,0,1,2.14,1.1,4.9,4.9,0,0,1,2.14,4.28,6,6,0,0,1-.6,2.69,6,6,0,0,1-1.6,2,7.16,7.16,0,0,1-2.3,1.24A8.94,8.94,0,0,1,344.17,141Z" transform="translate(-2.99 -2.94)"></path>
            <path class="cls-2" d="M350.88,134.67a5.38,5.38,0,0,1-.54,2.43,5.46,5.46,0,0,1-1.45,1.82,6.55,6.55,0,0,1-2.12,1.14,8.34,8.34,0,0,1-2.59.39,9.76,9.76,0,0,1-4.14-.86,7.72,7.72,0,0,1-3.06-2.52l.81-.53a7.48,7.48,0,0,0,6.44,3.07,6.78,6.78,0,0,0,2-.31,6,6,0,0,0,1.83-.92,4.8,4.8,0,0,0,1.34-1.54,4.25,4.25,0,0,0,.51-2.1,3.74,3.74,0,0,0-.65-2.28,4.83,4.83,0,0,0-1.63-1.4,10.49,10.49,0,0,0-2.17-.86l-2.21-.59c-.75-.2-1.45-.43-2.1-.68a6.19,6.19,0,0,1-1.72-1,4.22,4.22,0,0,1-1.16-1.47,5,5,0,0,1-.42-2.19,4.62,4.62,0,0,1,.54-2.28,4.81,4.81,0,0,1,1.43-1.6,6.65,6.65,0,0,1,2-1,8.22,8.22,0,0,1,2.3-.33,7.25,7.25,0,0,1,6.3,2.94l-.85.48a6.73,6.73,0,0,0-2.32-2,7.06,7.06,0,0,0-3.13-.63,7.86,7.86,0,0,0-1.79.22,5.44,5.44,0,0,0-1.72.72,4.19,4.19,0,0,0-1.3,1.34,3.78,3.78,0,0,0-.51,2,4.44,4.44,0,0,0,.42,2.1,3.35,3.35,0,0,0,1.19,1.27,7.48,7.48,0,0,0,1.83.81q1.07.33,2.37.64a24.53,24.53,0,0,1,2.35.72,8.57,8.57,0,0,1,2,1,4.34,4.34,0,0,1,1.9,3.81Z" transform="translate(-2.99 -2.94)"></path>
            <line class="cls-2" x1="165.01" y1="96.56" x2="430.01" y2="96.56"></line>
            <line class="cls-2" x1="515.01" y1="96.56" x2="544.01" y2="96.56"></line>
            <line class="cls-2" x1="165.01" y1="95.56" x2="430.01" y2="95.56"></line>
            <line class="cls-2" x1="515.01" y1="95.56" x2="544.01" y2="95.56"></line>
            <path class="cls-3" d="M73.86,2.94A70.87,70.87,0,0,0,3,73.8c0,1.3,0,2.6.11,3.89,0,.42.06.84.1,1.26.06.86.13,1.72.22,2.58.05.49.12,1,.18,1.46.1.77.21,1.55.33,2.32.08.51.18,1,.27,1.52.14.74.29,1.48.45,2.21q.16.75.35,1.5c.18.73.37,1.46.57,2.18.13.48.27,1,.41,1.44.22.75.46,1.48.71,2.22.15.44.29.88.45,1.32.29.8.6,1.6.92,2.39.14.35.27.71.41,1.05.47,1.13,1,2.24,1.49,3.34h0q.81,1.68,1.7,3.3c.15.27.31.53.46.8.45.8.91,1.59,1.39,2.37.21.35.44.69.66,1,.44.69.88,1.36,1.34,2,.25.37.51.72.77,1.08.46.64.92,1.27,1.39,1.88l.83,1.06c.49.61,1,1.21,1.5,1.81l.86,1c.54.61,1.09,1.2,1.65,1.79l.84.88c.63.64,1.28,1.26,1.93,1.88L26,126c.89.82,1.8,1.62,2.74,2.39.71-11.3-5.39-30.66-4-41.15,1.55-5.75,4.83-9.14,11.08-7.9-.1-4.87,0-10.73,2.5-15.09C41,59.66,45.56,58.84,50.46,60c.14-4.36.21-9.35,2.3-13.31,2.65-5,7.24-5,12-2.94C73.24,15,91.92,9.72,97.12,11.64c12,4.43,8.48,35,7.26,36.81,2.25,1.17,5.7.82,6.24,3.47s-1.75,6.91-2.9,9.1C105.16,65.89,101.1,70,97.35,73.9c.27.08.47.42.74.51-4.06,4.47-8,9.11-12.41,13.2A111.11,111.11,0,0,1,71,98.81a76.38,76.38,0,0,0,5.16-13.26c.78-3,2.28-4.05,4.51-6.2,1.72-1.66,3.43-3.34,5.08-5.09a99.49,99.49,0,0,0,9.49-11.45c2.86-4.13,5.19-8.57,7.72-12.9a128,128,0,0,1-25.07,28.9c2.41-9.35,13.26-41.4,13.72-51-1.38,9.41-13,41.12-15.38,50.32C70.76,68.56,67.63,58.36,65,47.69a111.68,111.68,0,0,0,6.87,25.58c.92,2.23,2,4.38,3,6.55,1,2-.25,4.1-.94,6.13a131.43,131.43,0,0,1-5.56,13.2A119.22,119.22,0,0,1,59.56,81,159.93,159.93,0,0,1,54.2,62.3c1,5.15,1.58,10.37,3,15.44A106.65,106.65,0,0,0,63,93.41c1.23,2.7,2.55,5.36,3.84,8,.56,1.16-2.68,5.36-3.48,6.55a106.71,106.71,0,0,1-10,12.27l-.24.26a120.91,120.91,0,0,1-9-18.52,162.59,162.59,0,0,1-5.36-18.66c.91,5.17,1.66,10.34,3,15.44a100.7,100.7,0,0,0,5.8,15.68c1.18,2.65,2.5,5.23,3.76,7.84.41.85-4.73,4.62-5.19,5-2,1.7-4.1,4.18-6.67,5-1.27.4-2.53.79-3.79,1.17A71.89,71.89,0,0,0,42,137.12l0,0q1.05.53,2.12,1l.31.14q3,1.38,6.18,2.47l1,.35c.56.19,1.12.37,1.69.54l1.54.44q1.09.3,2.2.57l1.81.42,1.3.26q1,.2,2,.37l1,.17q1.5.22,3,.39l.88.08q1.21.11,2.43.19l1,.05c1.08,0,2.16.08,3.25.08a70.87,70.87,0,0,0,0-141.73Zm27.87,83.54c-2.55,4.06-6.55,7.16-10.41,9.9,1.78,1.44,4.73,1.82,5.29,4.19s-1.76,5.85-3.55,7.3c-4.06,3.31-9,5.45-13.73,7.67-1.77.83-2.26,5-3.1,6.82a23.72,23.72,0,0,1-3.75,6.08c-3.41,3.89-8.54,5.24-13.55,5.27s-9.93-1.15-14.76-2.44L53,123.62a204.21,204.21,0,0,0,18.74-10.27c5.87-3.92,10.69-8.85,15.92-13.53-9.81,7.75-19.45,14.8-31,19.68a88.38,88.38,0,0,0,12.27-16.87A155.32,155.32,0,0,0,85,90.13c5-4.73,9.08-10.14,13.19-15.64C105.83,70.89,104.86,81.48,101.73,86.47Z" transform="translate(-2.99 -2.94)"></path>
          </svg>
        </div>        
      </div>
    </div>
    <!-- <h1 class="alt2 center theme-text theme-bg4 hide-on-med-and-up">Surveying.<span style="font-size:0"> </span><span class="theme-text2">Simplified.</span></h1> -->
    <h1 class="alt2 center theme-text theme-bg4 hide-on-med-and-up"><?php the_title(); ?></h1>
  </div>

  <div class="container">
    <div class="section">
      <?php get_template_part('includes/section', 'content'); ?>
    </div>

    <?php get_template_part('includes/section', 'services'); ?> 
  </div> 
</section>

<?php get_footer() ?>
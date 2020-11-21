<!DOCTYPE html>
<html>
    <title>DocMen - One stop solutions for doctors chamber management</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<body>

    <div class="dibody">
        <center>
            <h1>Hello Doctors! You are our HERO so DocMen is completly free for you!</h1>
            <p>SignUp Today</p>
        </center>
    </div>

    <div id="app">
        <h1>Hello App!</h1>
        <p>
            <!-- use router-link component for navigation. -->
            <!-- specify the link by passing the `to` prop. -->
            <!-- `<router-link>` will be rendered as an `<a>` tag by default -->
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
</div>

</body>
</html>
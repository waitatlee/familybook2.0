<html>
<head>
    <title>用户登录</title>
    <script src="<?php echo base_url(); ?>resource/js/vue.js"></script>
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('user/login'); ?>

<label for="title">账号</label>
<input type="input" name="account"/><br/>

<label for="text">密码</label>
<input type="password" name="password"><br/>

<input type="submit" name="submit" value="登录"/>
<div id="app">
    {{ message }}
</div>
<div id="app-2">
  <span v-bind:title="message">
    鼠标悬停在这里
  </span>
</div>
<div id="app-3">
    <p v-if="seen">现在你看到我了</p>
</div>
<div id="app-4">
    <ol>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ol>
</div>
<div id="app-5">
    <p>{{ message }}</p>
    <a v-on:click="reverseMessage">逆转消息</a>
</div>
</form>
<div id="app-6">
    <p>{{comment}}</p>
    <input v-model="comment">
</div>
<div id="app-7">
    <todo-item v-for="item in todoList" v-bind:todo="item" v-bind:key="item.id"></todo-item>
</div>
<script>
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>'
    });

    var app7 = new Vue({
        el: '#app-7',
        data: {
            'todoList':[{
                'id': '1',
                'text': '待办事项1'
            },{
                'id': '2',
                'text': '待办事项2'
            }]
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue! I`m Waitatlee. 中文名叫李伟达'
        }
    });
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: 'Vue,你好,我是李伟达'
        }
    });
    var app3 = new Vue({
        el: '#app-3',
        data: {
            message: 'can you seen me?',
            seen: 0
        }
    });
    var app4 = new Vue({
        el: '#app-4',
        data: {
            todos:[{
                'text': '列表内容1'
            },{
                'text': '列表内容2'
            },{
                'text': '列表内容3'
            }]
        }
    });
    var app5 = new Vue({
        el: '#app-5',
        data: {
            message: 'Hello Vue.js!'
        },
        methods: {
            reverseMessage: function () {
                this.message = '不会反过来的!';
                return false;
            }
        }
    });
    var app6 = new Vue({
        el: '#app-6',
        data: {
            comment: '正在输入...'
        }
    });
</script>
</body>
</html>
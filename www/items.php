<?php include 'base.php' ?>
<?php startblock('head') ?>
<style>
    #todo-list {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    #todo-list li {
        padding: 12px 20px 11px 0;
        position: relative;
        font-size: 24px;
        line-height: 1.1em;
        border-bottom: 1px solid #cccccc;
    }

    #todo-list li:after {
        content: "\0020";
        display: block;
        height: 0;
        clear: both;
        overflow: hidden;
        visibility: hidden;
    }

    #todo-list li.editing {
        padding: 0;
        border-bottom: 0;
    }

    #todo-list .editing .display,
    #todo-list .edit {
        display: none;
    }

    #todo-list .editing .edit {
        display: block;
    }

    #todo-list .editing input {
        width: 444px;
        font-size: 24px;
        font-family: inherit;
        margin: 0;
        line-height: 1.6em;
        border: 1px solid #999999;
        outline: none;
        padding: 10px 7px 0 27px;
        box-shadow: rgba(0, 0, 0, 0.2) 0 1px 2px 0 inset;
    }

    #todo-list .check {
        position: relative;
        top: 9px;
        margin: 0 10px 0 7px;
        float: left;
    }

    #todo-list .done .todo-text {
        text-decoration: line-through;
        color: #777777;
    }
</style>
<?php endblock() ?>

<?php startblock('content') ?>

<div class="row">
    <div class="span3">
        <h1>Go Hiking</h1>
        <a href="index.php">All Lists</a>
        <p><img src="http://placekitten.com/300/300" alt=""></p>
        <button class="btn btn-large btn-primary btn-block">
            Start Checking
        </button>

    </div>
    <div class="span9">
        <p style="margin-top: 15px;"><button class="btn"><i class="icon-plus"></i> Add Item</button></p>
        <ul id="todo-list" class="unstyled">
            <li>Alpenstock <span class="label label-success pull-right">ready</span></li>
            <li>Sports drink <span class="label pull-right">ready</span></li>
            <li>Trekking Shoes <span class="label label-success pull-right">ready</span></li>
            <li>Food <span class="label label-success pull-right">ready</span></li>
            <li>Map <span class="label label-success pull-right">ready</span></li>
        </ul>

    </div>
</div>


<?php endblock() ?>


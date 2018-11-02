<form action="/contact" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="emai1">Email address</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>

    </div>
    <div class="form-group">
        <label for="body">message</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>

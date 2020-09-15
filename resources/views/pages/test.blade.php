<div class="container">
  <div class="row">
    <div class="card">

      <div class="card-header">
        Product Info
      </div>

      <div class="card-body">

          <div class="form-group">
            <input type="text" name="search" id="search" class="form-controller" onkeyup="fetchData()" autocomplete="off">
          </div>

          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
              </tr>
            </thead>
            <tbody id="tbodyfordata">
              <!-- Data will be appened here -->
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<script>
  	function fetchData()
	{
		//Search Value
		const val = document.getElementById('search').value;

		//Search Url
		const url = "{{ url('search/autocomplete') }}";

		console.log(url);
		fetch(url)
		.then((resp) => resp.json()) //Transform the data into json
		.then(function(data){
			console.log(data);

			var tbodyref  = document.getElementById('tbodyfordata');
			console.log(tbodyref);
			tbodyref.innerHTML = '';

			let categories = data;
			console.log(categories);
			categories.map(function(category){
				let tr = createNode('tr'),
					id = createNode('td'),
					title = createNode('td'),
					content = createNode('td');
					id.innerText = category.id;
					title.innerText = category.title;
					content.innerText = category.content;
					append(tr,id);
					append(tr,title);
					append(tr,content);
					append(tbodyref,tr);
				});			
		})
		.catch(function(error){
			console.log(error);
		})
	}

	function createNode(element)
	{
		return document.createElement(element);
	}

	function append(parent,el)
	{
		return parent.appendChild(el);
	}
</script>
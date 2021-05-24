@csrf
<label>
    Titulo del proyecto:<br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}"/>
</label>
<br> 
<label>
    Descripcion:<br>
    <textarea type="text" name="description" >
        {{ old('url',$project->description) }}
    </textarea>
</label>
<br>    
<label>
    URL:<br>
    <input type="text" name="url" value="{{ old('description',$project->url) }}"/>
</label>
<br>
<button type="submit">{{$btnText}}</button> 
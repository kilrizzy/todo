@extends('layouts.master')

@section('content')

<h1>Task</h1>
<div class="row">
	<div class="span6"> 

{{ Form::open() }}

{{ Bootform::field(array(
      'label'       => "Name",
      'name'        => "name",
      'value'       => $fields['name']
)) }}

{{ Bootform::field(array(
      'label'       => "Details",
      'type'        => "textarea",
      'name'        => "details",
      'value'       => $fields['details']
)) }}

{{ Bootform::field(array(
      'label'       => "Notes",
      'type'        => "textarea",
      'name'        => "notes",
      'value'       => $fields['notes']
)) }}

{{ Bootform::field(array(
      'label'       => "Date Due",
      'name'        => "date_due",
      'value'       => $fields['date_due']
)) }}

{{ Bootform::field(array(
      'label'       => "Private",
      'name'        => "private",
      'value'       => $fields['private']
)) }}

{{ Bootform::field(array(
      'label'       => "Alarm",
      'name'        => "alarm",
      'value'       => $fields['alarm']
)) }}

{{ Bootform::field(array(
      'label'       => "Status",
      'name'        => "status",
      'value'       => $fields['status']
)) }}

<p>{{ Form::submit('Save',array('class'=>"btn btn-primary")) }}</p>

{{ Form::close() }}

</div>
<div class="span6">
<h2>Markdown</h2>
<pre><code>
# H1
## H2
### H3
#### H4
##### H5
###### H6

1. OL1
2. OL2

* UL
- UL

Italics, with *asterisks*

Bold, with **asterisks**

Strikethrough ~~Scratch this.~~

Inline `code` has `back-ticks around` it.

 ```
block of code
 ```

> Blockquotes are very handy in email to emulate reply text.
> This line is part of the same quote.

Quote break.

> This is a new blockquote

---, ***, or ___ to create a hr tag

</code></pre>
</div>

@stop
<!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "2aa77921bd8c40b2a45e8dac7c80ca3b"}'></script><!-- End Cloudflare Web Analytics -->
<div class="container">
  <form action="upload.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label for="InputFile">File</label>
      <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
      <input type="file" class="form-control" id="InputFile" name="InFile" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="InputPW">Password</label>
      <input type="password" class="form-control" id="InputPW" name="InPW" placeholder="Passwort">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

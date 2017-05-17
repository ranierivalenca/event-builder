function convertDateString(timestamp) {
    
	var t = timestamp.split(/[- :]/);

	// Apply each element to the Date function
	var d = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
  }
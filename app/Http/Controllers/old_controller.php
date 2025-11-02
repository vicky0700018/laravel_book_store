
// Handle update request


    // public function product_store(Request $request)
    // {
    //     // Create validator instance
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'product_name' => 'required|string|max:255',
    //             'product_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    //             'product_price' => 'required|numeric',
    //             'product_description' => 'nullable|string',
    //         ]
    //     );

    //     // If validation fails
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Handle image upload
    //     $imagePath = null;
    //     if ($request->hasFile('product_image')) {
    //         $imagePath = $request->file('product_image')->store('images', 'public');
    //     }

    //     // Create product
    //     Product::create([
    //         'product_name' => $request->product_name,
    //         'product_image' => $imagePath,
    //         'product_price' => $request->product_price,
    //         'product_description' => $request->product_description,
    //     ]);

    //     // Redirect with success message
    //     return redirect()->back()->with('success', 'Product added successfully!');
    // }

    //     public function product_store(Request $request)
    // {
    //     // Step 1: Check incoming data
    //     dd($request->all()); // Debug: shows all form input

    //     // Step 2: Validate input
    //     $request->validate([
    //         'product_name' => 'required|string|max:255',
    //         'product_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    //         'product_price' => 'required|numeric',
    //         'product_description' => 'nullable|string',
    //     ]);

    //     dd('Validation passed', $request->only(['product_name', 'product_price']));

    //     // Step 3: Handle image upload
    //     $imagePath = null;
    //     if ($request->hasFile('product_image')) {
    //         $imagePath = $request->file('product_image')->store('images', 'public');
    //         dd('Image uploaded successfully', $imagePath);
    //     } else {
    //         dd('No image uploaded');
    //     }

    //     // Step 4: Create product
    //     $product = Product::create([
    //         'product_name' => $request->product_name,
    //         'product_image' => $imagePath,
    //         'product_price' => $request->product_price,
    //         'product_description' => $request->product_description,
    //     ]);

    //     dd('Product created successfully', $product);

    //     // Step 5: Redirect
    //     return redirect()->back()->with('success', 'Product added successfully!');
    // }

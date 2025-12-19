<?php
<!---Nothing is here--->
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="card">
        <!-- Colored rectangle heading -->
        <div class="color-heading" id="colorHeading">
            <h1>Index</h1>
        </div>
        
        <!-- Simple links -->
        <div class="simple-links">
            <a href="#design" class="simple-link">Design Examples</a>
            <a href="#components" class="simple-link">UI Components</a>
            <a href="#templates" class="simple-link">Page Templates</a>
            <a href="#animations" class="simple-link">CSS Animations</a>
            <a href="#forms" class="simple-link">Form Elements</a>
            <a href="#navigation" class="simple-link">Navigation Patterns</a>
        </div>
        
        <!-- Current color info -->
        <div class="color-info">
            <div class="color-hex" id="colorHex">#3B82F6</div>
            <div class="color-name" id="colorName">Medium Blue</div>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f8fafc;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
            padding: 20px;
        }
        
        .card {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
        }
        
        /* Colored rectangle heading */
        .color-heading {
            background: #3b82f6;
            padding: 24px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        
        .color-heading h1 {
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        /* Slider */
        .slider-container {
            margin-bottom: 30px;
        }
        
        .slider {
            width: 100%;
            height: 8px;
            -webkit-appearance: none;
            appearance: none;
            background: linear-gradient(to right, 
                #e0f2fe, #bae6fd, #7dd3fc, #38bdf8, 
                #0ea5e9, #0284c7, #0369a1, #075985, #0c4a6e);
            border-radius: 4px;
            outline: none;
            margin-bottom: 12px;
        }
        
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            border: 3px solid #3b82f6;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
        
        .slider-labels {
            display: flex;
            justify-content: space-between;
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        /* Simple links */
        .simple-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 30px;
        }
        
        .simple-link {
            display: block;
            padding: 16px 20px;
            background: #f8fafc;
            color: #1e293b;
            text-decoration: none;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            font-weight: 500;
            transition: all 0.2s ease;
            text-align: center;
        }
        
        .simple-link:hover {
            background: #f1f5f9;
            transform: translateY(-1px);
            border-color: #cbd5e1;
        }
        
        .simple-link:active {
            transform: translateY(0);
        }
        
        /* Color info */
        .color-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            background: #f8fafc;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        
        .color-hex {
            font-family: 'Monaco', 'Consolas', monospace;
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
        }
        
        .color-name {
            color: #64748b;
            font-weight: 500;
        }
        
        /* Responsive */
        @media (max-width: 480px) {
            .card {
                padding: 20px;
            }
            
            .color-heading {
                padding: 20px;
            }
            
            .color-heading h1 {
                font-size: 1.5rem;
            }
            
            .color-info {
                flex-direction: column;
                gap: 8px;
                text-align: center;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorSlider = document.getElementById('colorSlider');
            const colorHeading = document.getElementById('colorHeading');
            const colorHex = document.getElementById('colorHex');
            const colorName = document.getElementById('colorName');
            const links = document.querySelectorAll('.simple-link');
            
            // Blue shades palette
            const blueShades = [
                { hex: '#e0f2fe', name: 'Light Blue' },
                { hex: '#bae6fd', name: 'Sky Blue' },
                { hex: '#7dd3fc', name: 'Baby Blue' },
                { hex: '#38bdf8', name: 'Azure' },
                { hex: '#0ea5e9', name: 'Bright Blue' },
                { hex: '#0284c7', name: 'Cobalt' },
                { hex: '#0369a1', name: 'Sapphire' },
                { hex: '#075985', name: 'Navy' },
                { hex: '#0c4a6e', name: 'Midnight' }
            ];
            
            // Update color based on slider
            function updateColor() {
                const index = parseInt(colorSlider.value);
                const color = blueShades[index];
                
                // Update heading color
                colorHeading.style.backgroundColor = color.hex;
                
                // Update text color based on brightness
                const hex = color.hex.replace('#', '');
                const r = parseInt(hex.substr(0, 2), 16);
                const g = parseInt(hex.substr(2, 2), 16);
                const b = parseInt(hex.substr(4, 2), 16);
                const brightness = (r * 299 + g * 587 + b * 114) / 1000;
                
                colorHeading.style.color = brightness > 128 ? '#1e293b' : 'white';
                
                // Update info display
                colorHex.textContent = color.hex;
                colorHex.style.color = color.hex;
                colorName.textContent = color.name;
                
                // Update slider thumb border
                document.querySelector('.slider::-webkit-slider-thumb').style.borderColor = color.hex;
            }
            
            // Initialize
            updateColor();
            
            // Slider event
            colorSlider.addEventListener('input', updateColor);
            
            // Link interactions
            links.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    const index = parseInt(colorSlider.value);
                    const color = blueShades[index].hex;
                    this.style.borderColor = color;
                });
                
                link.addEventListener('mouseleave', function() {
                    this.style.borderColor = '#e2e8f0';
                });
                
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Simple click feedback
                    this.style.transform = 'scale(0.98)';
                    this.style.backgroundColor = '#e2e8f0';
                    
                    setTimeout(() => {
                        this.style.transform = '';
                        this.style.backgroundColor = '';
                    }, 150);
                    
                    // Update color to a random shade
                    const randomIndex = Math.floor(Math.random() * blueShades.length);
                    colorSlider.value = randomIndex;
                    updateColor();
                });
            });
            
            
        });
    </script>
</body>
</html>

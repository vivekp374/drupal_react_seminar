import React from 'react';
import LikeButton from './LikeButton';
import { createRoot } from 'react-dom/client'

const container = document.getElementById('like_button_container_react_webpack');
const root = createRoot(container);
root.render(<LikeButton />);

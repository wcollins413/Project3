CREATE TABLE users (
    id INT AUTO_INCREMENT UNIQUE PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, 
    security_question TEXT NOT NULL,
    security_answer VARCHAR(255) NOT NULL, 
    last_login DATETIME,
    games_played INT DEFAULT 0,
    votes_cast INT DEFAULT 0,
    votes_received INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    host_user_id INT,
    question_set_id INT NOT NULL,
    current_question_index INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (host_user_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (question_set_id) REFERENCES question_sets(id) ON DELETE CASCADE
);


CREATE TABLE game_players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT NOT NULL,
    user_id INT, -- NULL for guests
    nickname VARCHAR(50) NOT NULL, -- display name for UI
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (game_id) REFERENCES games(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE question_sets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT, -- NULL = global set
    set_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_text TEXT NOT NULL,
    question_set_id INT NOT NULL,
    FOREIGN KEY (question_set_id) REFERENCES question_sets(id) ON DELETE CASCADE
);



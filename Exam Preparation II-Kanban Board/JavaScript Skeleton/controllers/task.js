const Task = require('../models/Task');

module.exports = {
	index: (req, res) => {
		// TODO: Implement me...
        Task.find().then(tasks => {
            res.render('task/index', {
                'openTasks': tasks.filter(t => t.status === "Open"),
                'inProgressTasks': tasks.filter(t => t.status === 'In Progress'),
                'finishedTasks': tasks.filter(t => t.status === 'Finished')
            });
        });

    },
	createGet: (req, res) => {
		// TODO: Implement me...
        res.render('task/create');
	},
	createPost: (req, res) => {
		// TODO: Implement me...
        let task = req.body;

        Task.create(task).then(task => {
            res.redirect('/');
        }).catch(err => {
            task.error = "Cannot create task.";
            return res.render('task/create', task);
        });
	},
	editGet: (req, res) => {
		// TODO: Implement me...
        let id = req.params.id;

        Task.findById(id).then(task => {
            if (task) {
                return res.render('task/edit', task);
            } else {
                return res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
	},
	editPost: (req, res) => {
		// TODO: Implement me...
        let id = req.params.id;
        let task = req.body;

        Task.findByIdAndUpdate(id, task, {runValidators: true}).then(task => {
            res.redirect('/');
        }).catch(err => {
            task.id = id;
            task.error = "Cannot edit task.";
            return res.render('task/edit', task);
        });
	}
};